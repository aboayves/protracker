<?php
class  Cpdf {
  public  $numObj = 0;
  public  $objects =  array();
  public  $catalogId;
  public  $fonts = array();
  public  $defaultFont = './fonts/Helvetica.afm';
  public  $currentFont = '';
  public  $currentBaseFont = '';
  public  $currentFontNum = 0;
  public  $currentNode;
  public  $currentPage;
  public  $currentContents;
  public  $numFonts = 0;
  private  $numStates =  0;
  public  $currentColour = null;
  public  $currentStrokeColour = null;
  public  $currentLineStyle = '';
  public $currentLineTransparency = array("mode" => "Normal", "opacity" => 1.0);
  public $currentFillTransparency = array("mode" => "Normal", "opacity" => 1.0);
  public  $stateStack =  array();
  public  $nStateStack =  0;
  public  $numPages = 0;
  public  $stack = array();
  public  $nStack = 0;
  public  $looseObjects = array();
  public  $addLooseObjects = array();
  public  $infoObject = 0;
  public  $numImages = 0;
  public  $options = array('compression'=>true);
  public  $firstPageId;
  public  $wordSpaceAdjust = 0;
  public  $charSpaceAdjust = 0;
  public  $procsetObjectId;
  public  $fontFamilies =  array();
 
  public  $fontcache = '';
  public  $fontcacheVersion = 4;
  public  $tmp = '';
  public  $currentTextState =  '';
  public  $messages = '';
  public  $arc4 = '';
  public  $arc4_objnum = 0;
  public  $fileIdentifier = '';
  public  $encrypted = 0;
  public  $encryptionKey = '';
  public  $callback =  array();
  public  $nCallback =  0;
  public  $destinations =  array();
  public  $checkpoint =  '';
  public  $imagelist = array();
  public  $isUnicode = false;
  public  $javascript = '';
  protected $compressionReady = false;
  protected $currentPageSize = array("width" => 0, "height" => 0);
  static protected $targetEncoding = 'iso-8859-1';
  function __construct ($pageSize = array(0, 0, 612, 792), $isUnicode = false, $fontcache = '', $tmp = '') {
    $this->isUnicode = $isUnicode;
    $this->fontcache = $fontcache;
    $this->tmp = $tmp;
    $this->newDocument($pageSize);
    $this->compressionReady = function_exists('gzcompress');
    if ( in_array('Windows-1252', mb_list_encodings()) ) {
      self::$targetEncoding = 'Windows-1252';
    }
    $this->setFontFamily('init');
  }
  function __destruct() {
    clear_object($this);
  }
  protected function  o_destination($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'destination', 'info'=>array());
      $tmp =  '';
      switch  ($options['type']) {
      case  'XYZ':
      case  'FitR':
        $tmp =   ' '.$options['p3'].$tmp;
      case  'FitH':
      case  'FitV':
      case  'FitBH':
      case  'FitBV':
        $tmp =   ' '.$options['p1'].' '.$options['p2'].$tmp;
      case  'Fit':
      case  'FitB':
        $tmp =   $options['type'].$tmp;
        $this->objects[$id]['info']['string'] = $tmp;
        $this->objects[$id]['info']['page'] = $options['page'];
      }
      break;
    case  'out':
      $tmp =  $o['info'];
      $res = "\n$id 0 obj\n".'['.$tmp['page'].' 0 R /'.$tmp['string']."]\nendobj";
      return  $res;
    }
  }
  protected function  o_viewerPreferences($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'viewerPreferences', 'info'=>array());
      break;
    case  'add':
      foreach($options as  $k=>$v) {
        switch  ($k) {
        case  'HideToolbar':
        case  'HideMenubar':
        case  'HideWindowUI':
        case  'FitWindow':
        case  'CenterWindow':
        case  'NonFullScreenPageMode':
        case  'Direction':
          $o['info'][$k] = $v;
          break;
        }
      }
      break;
    case  'out':
      $res = "\n$id 0 obj\n<< ";
      foreach($o['info'] as  $k=>$v) {
        $res.= "\n/$k $v";
      }
      $res.= "\n>>\n";
      return  $res;
    }
  }
  protected function  o_catalog($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'catalog', 'info'=>array());
      $this->catalogId = $id;
      break;
    case  'outlines':
    case  'pages':
    case  'openHere':
    case  'javascript':
      $o['info'][$action] = $options;
      break;
    case  'viewerPreferences':
      if  (!isset($o['info']['viewerPreferences'])) {
        $this->numObj++;
        $this->o_viewerPreferences($this->numObj, 'new');
        $o['info']['viewerPreferences'] = $this->numObj;
      }
      $vp =  $o['info']['viewerPreferences'];
      $this->o_viewerPreferences($vp, 'add', $options);
      break;
    case  'out':
      $res = "\n$id 0 obj\n<< /Type /Catalog";
      foreach($o['info'] as  $k=>$v) {
        switch ($k) {
        case  'outlines':
          $res.= "\n/Outlines $v 0 R";
          break;
        case  'pages':
          $res.= "\n/Pages $v 0 R";
          break;
        case  'viewerPreferences':
          $res.= "\n/ViewerPreferences $v 0 R";
          break;
        case  'openHere':
          $res.= "\n/OpenAction $v 0 R";
          break;
        case  'javascript':
          $res.= "\n/Names <</JavaScript $v 0 R>>";
          break;
        }
      }
      $res.= " >>\nendobj";
      return  $res;
    }
  }
  protected function  o_pages($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'pages', 'info'=>array());
      $this->o_catalog($this->catalogId, 'pages', $id);
      break;
    case  'page':
      if  (!is_array($options)) {
        $o['info']['pages'][] = $options;
      } else {
        if  (isset($options['id']) &&  isset($options['rid']) &&  isset($options['pos'])) {
          $i =  array_search($options['rid'], $o['info']['pages']);
          if  (isset($o['info']['pages'][$i]) &&  $o['info']['pages'][$i] == $options['rid']) {
            switch  ($options['pos']) {
            case  'before':
              $k =  $i;
              break;
            case  'after':
              $k = $i+1;
              break;
            default:
              $k = -1;
              break;
            }
            if  ($k >= 0) {
              for  ($j = count($o['info']['pages']) -1;$j >= $k;$j--) {
                $o['info']['pages'][$j+1] = $o['info']['pages'][$j];
              }
              $o['info']['pages'][$k] = $options['id'];
            }
          }
        }
      }
      break;
    case  'procset':
      $o['info']['procset'] = $options;
      break;
    case  'mediaBox':
      $o['info']['mediaBox'] = $options;
      $this->currentPageSize = array('width' => $options[2], 'height' => $options[3]);
      break;
    case  'font':
      $o['info']['fonts'][] = array('objNum'=>$options['objNum'], 'fontNum'=>$options['fontNum']);
      break;
    case  'extGState':
      $o['info']['extGStates'][] =  array('objNum' => $options['objNum'],  'stateNum' => $options['stateNum']);
      break;
    case  'xObject':
      $o['info']['xObjects'][] = array('objNum'=>$options['objNum'], 'label'=>$options['label']);
      break;
    case  'out':
      if  (count($o['info']['pages'])) {
        $res = "\n$id 0 obj\n<< /Type /Pages\n/Kids [";
        foreach($o['info']['pages'] as  $v) {
          $res.= "$v 0 R\n";
        }
        $res.= "]\n/Count ".count($this->objects[$id]['info']['pages']);
        if  ( (isset($o['info']['fonts']) &&  count($o['info']['fonts'])) ||
              isset($o['info']['procset']) ||
              (isset($o['info']['extGStates']) &&  count($o['info']['extGStates']))) {
          $res.= "\n/Resources <<";
          if  (isset($o['info']['procset'])) {
            $res.= "\n/ProcSet ".$o['info']['procset']." 0 R";
          }
          if  (isset($o['info']['fonts']) &&  count($o['info']['fonts'])) {
            $res.= "\n/Font << ";
            foreach($o['info']['fonts'] as  $finfo) {
              $res.= "\n/F".$finfo['fontNum']." ".$finfo['objNum']." 0 R";
            }
            $res.= "\n>>";
          }
          if  (isset($o['info']['xObjects']) &&  count($o['info']['xObjects'])) {
            $res.= "\n/XObject << ";
            foreach($o['info']['xObjects'] as  $finfo) {
              $res.= "\n/".$finfo['label']." ".$finfo['objNum']." 0 R";
            }
            $res.= "\n>>";
          }
          if  ( isset($o['info']['extGStates']) &&  count($o['info']['extGStates'])) {
            $res.=  "\n/ExtGState << ";
            foreach ($o['info']['extGStates'] as  $gstate) {
              $res.=  "\n/GS" . $gstate['stateNum'] . " " . $gstate['objNum'] . " 0 R";
            }
            $res.=  "\n>>";
          }
          $res.= "\n>>";
          if  (isset($o['info']['mediaBox'])) {
            $tmp = $o['info']['mediaBox'];
            $res.= "\n/MediaBox [".sprintf('%.3F %.3F %.3F %.3F', $tmp[0], $tmp[1], $tmp[2], $tmp[3]) .']';
          }
        }
        $res.= "\n >>\nendobj";
      } else {
        $res = "\n$id 0 obj\n<< /Type /Pages\n/Count 0\n>>\nendobj";
      }
      return  $res;
    }
  }
  protected function  o_outlines($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'outlines', 'info'=>array('outlines'=>array()));
      $this->o_catalog($this->catalogId, 'outlines', $id);
      break;
    case  'outline':
      $o['info']['outlines'][] = $options;
      break;
    case  'out':
      if  (count($o['info']['outlines'])) {
        $res = "\n$id 0 obj\n<< /Type /Outlines /Kids [";
        foreach($o['info']['outlines'] as  $v) {
          $res.= "$v 0 R ";
        }
        $res.= "] /Count ".count($o['info']['outlines']) ." >>\nendobj";
      } else {
        $res = "\n$id 0 obj\n<< /Type /Outlines /Count 0 >>\nendobj";
      }
      return  $res;
    }
  }
  protected function  o_font($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] =  array('t' => 'font', 'info' => array('name' => $options['name'], 'fontFileName' => $options['fontFileName'], 'SubType' => 'Type1'));
      $fontNum =  $this->numFonts;
      $this->objects[$id]['info']['fontNum'] =  $fontNum;
      if  (isset($options['differences'])) {
        $this->numObj++;
        $this->o_fontEncoding($this->numObj, 'new', $options);
        $this->objects[$id]['info']['encodingDictionary'] =  $this->numObj;
      } else  if  (isset($options['encoding'])) {
        switch ($options['encoding']) {
        case  'WinAnsiEncoding':
        case  'MacRomanEncoding':
        case  'MacExpertEncoding':
          $this->objects[$id]['info']['encoding'] =  $options['encoding'];
          break;
        case  'none':
          break;
        default:
          $this->objects[$id]['info']['encoding'] =  'WinAnsiEncoding';
          break;
        }
      } else {
        $this->objects[$id]['info']['encoding'] =  'WinAnsiEncoding';
      }
      if ($this->fonts[$options['fontFileName']]['isUnicode']) {
        $toUnicodeId = ++$this->numObj;
        $this->o_contents($toUnicodeId, 'new', 'raw');
        $this->objects[$id]['info']['toUnicode'] = $toUnicodeId;
        $stream =  <<<EOT
/CIDInit /ProcSet findresource begin
12 dict begin
begincmap
/CIDSystemInfo
<</Registry (Adobe)
/Ordering (UCS)
/Supplement 0
>> def
/CMapName /Adobe-Identity-UCS def
/CMapType 2 def
1 begincodespacerange
<0000> <FFFF>
endcodespacerange
1 beginbfrange
<0000> <FFFF> <0000>
endbfrange
endcmap
CMapName currentdict /CMap defineresource pop
end
end
EOT;
        $res =   "<</Length " . mb_strlen($stream, '8bit') . " >>\n";
        $res .=  "stream\n" . $stream . "endstream";
        $this->objects[$toUnicodeId]['c'] = $res;
        $cidFontId = ++$this->numObj;
        $this->o_fontDescendentCID($cidFontId, 'new', $options);
        $this->objects[$id]['info']['cidFont'] = $cidFontId;
      }
      $this->o_pages($this->currentNode, 'font', array('fontNum' => $fontNum, 'objNum' => $id));
      break;
    case  'add':
      foreach ($options as  $k => $v) {
        switch  ($k) {
        case  'BaseFont':
          $o['info']['name'] =  $v;
          break;
        case  'FirstChar':
        case  'LastChar':
        case  'Widths':
        case  'FontDescriptor':
        case  'SubType':
          $this->addMessage('o_font '.$k." : ".$v);
          $o['info'][$k] =  $v;
          break;
        }
      }
      if (isset($o['info']['cidFont'])) {
        $this->o_fontDescendentCID($o['info']['cidFont'], 'add', $options);
      }
      break;
    case  'out':
      if ($this->fonts[$this->objects[$id]['info']['fontFileName']]['isUnicode']) {
        $res =  "\n$id 0 obj\n<</Type /Font\n/Subtype /Type0\n";
        $res.=  "/BaseFont /".$o['info']['name']."\n";
        $res.=  "/Encoding /Identity-H\n";
        $res.=  "/DescendantFonts [".$o['info']['cidFont']." 0 R]\n";
        $res.=  "/ToUnicode ".$o['info']['toUnicode']." 0 R\n";
        $res.=  ">>\n";
        $res.=  "endobj";
      } else {
        $res =  "\n$id 0 obj\n<< /Type /Font\n/Subtype /".$o['info']['SubType']."\n";
        $res.=  "/Name /F".$o['info']['fontNum']."\n";
        $res.=  "/BaseFont /".$o['info']['name']."\n";
        if  (isset($o['info']['encodingDictionary'])) {
          $res.=  "/Encoding ".$o['info']['encodingDictionary']." 0 R\n";
        } else  if  (isset($o['info']['encoding'])) {
          $res.=  "/Encoding /".$o['info']['encoding']."\n";
        }
        if  (isset($o['info']['FirstChar'])) {
          $res.=  "/FirstChar ".$o['info']['FirstChar']."\n";
        }
        if  (isset($o['info']['LastChar'])) {
          $res.=  "/LastChar ".$o['info']['LastChar']."\n";
        }
        if  (isset($o['info']['Widths'])) {
          $res.=  "/Widths ".$o['info']['Widths']." 0 R\n";
        }
        if  (isset($o['info']['FontDescriptor'])) {
          $res.=  "/FontDescriptor ".$o['info']['FontDescriptor']." 0 R\n";
        }
        $res.=  ">>\n";
        $res.=  "endobj";
      }
      return  $res;
    }
  }
  protected function  o_fontDescriptor($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'fontDescriptor', 'info'=>$options);
      break;
    case  'out':
      $res = "\n$id 0 obj\n<< /Type /FontDescriptor\n";
      foreach ($o['info'] as  $label => $value) {
        switch  ($label) {
        case  'Ascent':
        case  'CapHeight':
        case  'Descent':
        case  'Flags':
        case  'ItalicAngle':
        case  'StemV':
        case  'AvgWidth':
        case  'Leading':
        case  'MaxWidth':
        case  'MissingWidth':
        case  'StemH':
        case  'XHeight':
        case  'CharSet':
          if  (mb_strlen($value, '8bit')) {
            $res.= "/$label $value\n";
          }
          break;
        case  'FontFile':
        case  'FontFile2':
        case  'FontFile3':
          $res.= "/$label $value 0 R\n";
          break;
        case  'FontBBox':
          $res.= "/$label [$value[0] $value[1] $value[2] $value[3]]\n";
          break;
        case  'FontName':
          $res.= "/$label /$value\n";
          break;
        }
      }
      $res.= ">>\nendobj";
      return  $res;
    }
  }
  protected function  o_fontEncoding($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'fontEncoding', 'info'=>$options);
      break;
    case  'out':
      $res = "\n$id 0 obj\n<< /Type /Encoding\n";
      if  (!isset($o['info']['encoding'])) {
        $o['info']['encoding'] = 'WinAnsiEncoding';
      }
      if  ($o['info']['encoding'] !== 'none') {
        $res.= "/BaseEncoding /".$o['info']['encoding']."\n";
      }
      $res.= "/Differences \n[";
      $onum = -100;
      foreach($o['info']['differences'] as  $num=>$label) {
        if  ($num != $onum+1) {
          $res.=  "\n$num /$label";
        } else {
          $res.=  " /$label";
        }
        $onum = $num;
      }
      $res.= "\n]\n>>\nendobj";
      return  $res;
    }
  }
  protected function  o_fontDescendentCID($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] =  array('t'=>'fontDescendentCID', 'info'=>$options);
      $cidSystemInfoId = ++$this->numObj;
      $this->o_contents($cidSystemInfoId, 'new', 'raw');
      $this->objects[$id]['info']['cidSystemInfo'] = $cidSystemInfoId;
      $res=   "<</Registry (Adobe)\n"; 
      $res.=  "/Ordering (UCS)\n"; 
      $res.=  "/Supplement 0\n"; 
      $res.=  ">>";
      $this->objects[$cidSystemInfoId]['c'] = $res;
      $cidToGidMapId = ++$this->numObj;
      $this->o_fontGIDtoCIDMap($cidToGidMapId, 'new', $options);
      $this->objects[$id]['info']['cidToGidMap'] = $cidToGidMapId;
      break;
    case  'add':
      foreach ($options as  $k => $v) {
        switch  ($k) {
        case  'BaseFont':
          $o['info']['name'] =  $v;
          break;
        case  'FirstChar':
        case  'LastChar':
        case  'MissingWidth':
        case  'FontDescriptor':
        case  'SubType':
          $this->addMessage("o_fontDescendentCID $k : $v");
          $o['info'][$k] =  $v;
          break;
        }
      }
      $this->o_fontGIDtoCIDMap($o['info']['cidToGidMap'], 'add', $options);
      break;
    case  'out':
      $res =  "\n$id 0 obj\n";
      $res.=  "<</Type /Font\n";
      $res.=  "/Subtype /CIDFontType2\n";
      $res.=  "/BaseFont /".$o['info']['name']."\n";
      $res.=  "/CIDSystemInfo ".$o['info']['cidSystemInfo']." 0 R\n";
      if  (isset($o['info']['FontDescriptor'])) {
        $res.=  "/FontDescriptor ".$o['info']['FontDescriptor']." 0 R\n";
      }
      if  (isset($o['info']['MissingWidth'])) {
        $res.=  "/DW ".$o['info']['MissingWidth']."\n";
      }
      if  (isset($o['info']['fontFileName']) && isset($this->fonts[$o['info']['fontFileName']]['CIDWidths'])) {
        $cid_widths = &$this->fonts[$o['info']['fontFileName']]['CIDWidths'];
        $w = '';
        foreach ($cid_widths as $cid => $width) {
          $w .= "$cid [$width] ";
        }
        $res.=  "/W [$w]\n";
      }
      $res.=  "/CIDToGIDMap ".$o['info']['cidToGidMap']." 0 R\n";
      $res.=  ">>\n";
      $res.=  "endobj";
      return  $res;
    }
  }
  protected function  o_fontGIDtoCIDMap($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] =  array('t'=>'fontGIDtoCIDMap', 'info'=>$options);
      break;
    case  'out':
      $res = "\n$id 0 obj\n";
      $fontFileName = $o['info']['fontFileName'];
      $tmp = $this->fonts[$fontFileName]['CIDtoGID'] = base64_decode($this->fonts[$fontFileName]['CIDtoGID']);
      $compressed = isset($this->fonts[$fontFileName]['CIDtoGID_Compressed']) &&
                    $this->fonts[$fontFileName]['CIDtoGID_Compressed'];
      if  (!$compressed && isset($o['raw'])) {
        $res.= $tmp;
      } else {
        $res.=  "<<";
        if  (!$compressed && $this->compressionReady && $this->options['compression']) {
          $compressed = true;
          $tmp =  gzcompress($tmp,  6);
        }
        if ($compressed) {
          $res.= "\n/Filter /FlateDecode";
        }
        $res.= "\n/Length ".mb_strlen($tmp, '8bit') .">>\nstream\n$tmp\nendstream";
      }
      $res.= "\nendobj";
      return  $res;
    }
  }
  protected function  o_procset($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'procset', 'info'=>array('PDF'=>1, 'Text'=>1));
      $this->o_pages($this->currentNode, 'procset', $id);
      $this->procsetObjectId = $id;
      break;
    case  'add':
      switch  ($options) {
      case  'ImageB':
      case  'ImageC':
      case  'ImageI':
        $o['info'][$options] = 1;
        break;
      }
      break;
    case  'out':
      $res = "\n$id 0 obj\n[";
      foreach ($o['info'] as  $label=>$val) {
        $res.= "/$label ";
      }
      $res.= "]\nendobj";
      return  $res;
    }
  }
  protected function  o_info($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->infoObject = $id;
      $date = 'D:'.@date('Ymd');
      $this->objects[$id] = array('t'=>'info', 'info'=>array('Creator'=>'R and OS php pdf writer, http://www.ros.co.nz', 'CreationDate'=>$date));
      break;
    case  'Title':
    case  'Author':
    case  'Subject':
    case  'Keywords':
    case  'Creator':
    case  'Producer':
    case  'CreationDate':
    case  'ModDate':
    case  'Trapped':
      $o['info'][$action] = $options;
      break;
    case  'out':
      if  ($this->encrypted) {
        $this->encryptInit($id);
      }
      $res = "\n$id 0 obj\n<<\n";
      foreach ($o['info'] as  $k=>$v) {
        $res.= "/$k (";
        $raw = ($k === 'CreationDate' || $k === 'ModDate');
        $c = $v;
        if  ($this->encrypted) {
          $c = $this->ARC4($c);
        }
        $res.= ($raw) ? $c : $this->filterText($c);
        $res.= ")\n";
      }
      $res.= ">>\nendobj";
      return  $res;
    }
  }
  protected function  o_action($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      if  (is_array($options)) {
        $this->objects[$id] = array('t'=>'action', 'info'=>$options, 'type'=>$options['type']);
      } else {
        $this->objects[$id] = array('t'=>'action', 'info'=>$options, 'type'=>'URI');
      }
      break;
    case  'out':
      if  ($this->encrypted) {
        $this->encryptInit($id);
      }
      $res = "\n$id 0 obj\n<< /Type /Action";
      switch ($o['type']) {
      case  'ilink':
        $res.= "\n/S /GoTo\n/D ".$this->destinations[(string)$o['info']['label']]." 0 R";
        break;
      case  'URI':
        $res.= "\n/S /URI\n/URI (";
        if  ($this->encrypted) {
          $res.= $this->filterText($this->ARC4($o['info']));
        } else {
          $res.= $this->filterText($o['info']);
        }
        $res.= ")";
        break;
      }
      $res.= "\n>>\nendobj";
      return  $res;
    }
  }
  protected function  o_annotation($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $pageId =  $this->currentPage;
      $this->o_page($pageId, 'annot', $id);
      switch ($options['type']) {
      case  'link':
        $this->objects[$id] = array('t'=>'annotation', 'info'=>$options);
        $this->numObj++;
        $this->o_action($this->numObj, 'new', $options['url']);
        $this->objects[$id]['info']['actionId'] = $this->numObj;
        break;
      case  'ilink':
        $label =  $options['label'];
        $this->objects[$id] = array('t'=>'annotation', 'info'=>$options);
        $this->numObj++;
        $this->o_action($this->numObj, 'new', array('type'=>'ilink', 'label'=>$label));
        $this->objects[$id]['info']['actionId'] = $this->numObj;
        break;
      }
      break;
    case  'out':
      $res = "\n$id 0 obj\n<< /Type /Annot";
      switch ($o['info']['type']) {
      case  'link':
      case  'ilink':
        $res.=  "\n/Subtype /Link";
        break;
      }
      $res.= "\n/A ".$o['info']['actionId']." 0 R";
      $res.= "\n/Border [0 0 0]";
      $res.= "\n/H /I";
      $res.= "\n/Rect [ ";
      foreach($o['info']['rect'] as  $v) {
        $res.=  sprintf("%.4F ", $v);
      }
      $res.= "]";
      $res.= "\n>>\nendobj";
      return  $res;
    }
  }
  protected function  o_page($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->numPages++;
      $this->objects[$id] = array('t'=>'page', 'info'=>array('parent'=>$this->currentNode, 'pageNum'=>$this->numPages));
      if  (is_array($options)) {
        $options['id'] = $id;
        $this->o_pages($this->currentNode, 'page', $options);
      } else {
        $this->o_pages($this->currentNode, 'page', $id);
      }
      $this->currentPage = $id;
      $this->numObj++;
      $this->o_contents($this->numObj, 'new', $id);
      $this->currentContents = $this->numObj;
      $this->objects[$id]['info']['contents'] = array();
      $this->objects[$id]['info']['contents'][] = $this->numObj;
      $match =  ($this->numPages%2 ?  'odd' :  'even');
      foreach($this->addLooseObjects as  $oId=>$target) {
        if  ($target === 'all' || $match === $target) {
          $this->objects[$id]['info']['contents'][] = $oId;
        }
      }
      break;
    case  'content':
      $o['info']['contents'][] = $options;
      break;
    case  'annot':
      if  (!isset($o['info']['annot'])) {
        $o['info']['annot'] = array();
      }
      $o['info']['annot'][] = $options;
      break;
    case  'out':
      $res = "\n$id 0 obj\n<< /Type /Page";
      $res.= "\n/Parent ".$o['info']['parent']." 0 R";
      if  (isset($o['info']['annot'])) {
        $res.= "\n/Annots [";
        foreach($o['info']['annot'] as  $aId) {
          $res.= " $aId 0 R";
        }
        $res.= " ]";
      }
      $count =  count($o['info']['contents']);
      if  ($count == 1) {
        $res.= "\n/Contents ".$o['info']['contents'][0]." 0 R";
      } else  if  ($count>1) {
        $res.= "\n/Contents [\n";
        foreach ($o['info']['contents'] as  $cId) {
          $res.= "$cId 0 R\n";
        }
        $res.= "]";
      }
      $res.= "\n>>\nendobj";
      return  $res;
    }
  }
  protected function  o_contents($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'contents', 'c'=>'', 'info'=>array());
      if  (mb_strlen($options, '8bit') &&  intval($options)) {
        $this->objects[$id]['onPage'] = $options;
      } else  if  ($options === 'raw') {
        $this->objects[$id]['raw'] = 1;
      }
      break;
    case  'add':
      foreach ($options as  $k=>$v) {
        $o['info'][$k] = $v;
      }
    case  'out':
      $tmp = $o['c'];
      $res =  "\n$id 0 obj\n";
      if  (isset($this->objects[$id]['raw'])) {
        $res.= $tmp;
      } else {
        $res.=  "<<";
        if  ($this->compressionReady && $this->options['compression']) {
          $res.= " /Filter /FlateDecode";
          $tmp =  gzcompress($tmp,  6);
        }
        if  ($this->encrypted) {
          $this->encryptInit($id);
          $tmp =  $this->ARC4($tmp);
        }
        foreach($o['info'] as  $k=>$v) {
          $res.=  "\n/$k $v";
        }
        $res.= "\n/Length ".mb_strlen($tmp, '8bit') ." >>\nstream\n$tmp\nendstream";
      }
      $res.= "\nendobj";
      return  $res;
    }
  }
  protected function  o_embedjs($id, $action, $code = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'embedjs', 'info'=>array(
        'Names' => '[(EmbeddedJS) '.($id+1).' 0 R]'
      ));
      break;
    case  'out':
      $res = "\n$id 0 obj\n<< ";
      foreach($o['info'] as  $k=>$v) {
        $res.=  "\n/$k $v";
      }
      $res.= "\n>>\nendobj";
      return  $res;
    }
  }
  protected function  o_javascript($id, $action, $code = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'javascript', 'info'=>array(
        'S' => '/JavaScript',
        'JS' => '('.$this->filterText($code).')',
      ));
      break;
    case  'out':
      $res = "\n$id 0 obj\n<< ";
      foreach($o['info'] as  $k=>$v) {
        $res.=  "\n/$k $v";
      }
      $res.= "\n>>\nendobj";
      return  $res;
    }
  }
  protected function  o_image($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'image', 'data'=>&$options['data'], 'info'=>array());
      $info =& $this->objects[$id]['info'];
      $info['Type'] = '/XObject';
      $info['Subtype'] = '/Image';
      $info['Width'] = $options['iw'];
      $info['Height'] = $options['ih'];
      if (isset($options['masked']) && $options['masked']) {
        $info['SMask'] = ($this->numObj-1).' 0 R';
      }
      if  (!isset($options['type']) || $options['type'] === 'jpg') {
        if  (!isset($options['channels'])) {
          $options['channels'] = 3;
        }
        switch ($options['channels']) {
          case  1: $info['ColorSpace'] = '/DeviceGray'; break;
          case  4: $info['ColorSpace'] = '/DeviceCMYK'; break;
          default: $info['ColorSpace'] = '/DeviceRGB'; break;
        }
        if ($info['ColorSpace'] === '/DeviceCMYK') {
          $info['Decode'] = '[1 0 1 0 1 0 1 0]';
        }
        $info['Filter'] = '/DCTDecode';
        $info['BitsPerComponent'] = 8;
      } 
      else if  ($options['type'] === 'png') {
        $info['Filter'] = '/FlateDecode';
        $info['DecodeParms'] = '<< /Predictor 15 /Colors '.$options['ncolor'].' /Columns '.$options['iw'].' /BitsPerComponent '.$options['bitsPerComponent'].'>>';
        if ($options['isMask']) {
          $info['ColorSpace'] = '/DeviceGray';
        }
        else {
          if  (mb_strlen($options['pdata'], '8bit')) {
            $tmp =  ' [ /Indexed /DeviceRGB '.(mb_strlen($options['pdata'], '8bit') /3-1) .' ';
            $this->numObj++;
            $this->o_contents($this->numObj, 'new');
            $this->objects[$this->numObj]['c'] = $options['pdata'];
            $tmp.= $this->numObj.' 0 R';
            $tmp.= ' ]';
            $info['ColorSpace'] =  $tmp;
            if  (isset($options['transparency'])) {
              $transparency = $options['transparency'];
              switch ($transparency['type']) {
              case  'indexed':
                $tmp = ' [ '.$transparency['data'].' '.$transparency['data'].'] ';
                $info['Mask'] =  $tmp;
                break;
              case 'color-key':
                $tmp = ' [ '.
                  $transparency['r'] . ' ' . $transparency['r'] .
                  $transparency['g'] . ' ' . $transparency['g'] .
                  $transparency['b'] . ' ' . $transparency['b'] .
                  ' ] ';
                $info['Mask'] = $tmp;
                break;
              }
            }
          } else {
            if  (isset($options['transparency'])) {
              $transparency = $options['transparency'];
              switch ($transparency['type']) {
              case  'indexed':
                $tmp = ' [ '.$transparency['data'].' '.$transparency['data'].'] ';
                $info['Mask'] =  $tmp;
                break;
              case 'color-key':
                $tmp = ' [ '.
                  $transparency['r'] . ' ' . $transparency['r'] . ' ' .
                  $transparency['g'] . ' ' . $transparency['g'] . ' ' .
                  $transparency['b'] . ' ' . $transparency['b'] .
                  ' ] ';
                $info['Mask'] = $tmp;
                break;
              }
            }
            $info['ColorSpace'] = '/'.$options['color'];
          }
        }
        $info['BitsPerComponent'] = $options['bitsPerComponent'];
      }
      $this->o_pages($this->currentNode, 'xObject', array('label'=>$options['label'], 'objNum'=>$id));
      $this->o_procset($this->procsetObjectId, 'add', 'ImageC');
      break;
    case  'out':
      $tmp = &$o['data'];
      $res =  "\n$id 0 obj\n<<";
      foreach($o['info'] as  $k=>$v) {
        $res.= "\n/$k $v";
      }
      if  ($this->encrypted) {
        $this->encryptInit($id);
        $tmp =  $this->ARC4($tmp);
      }
      $res.= "\n/Length ".mb_strlen($tmp, '8bit') .">>\nstream\n$tmp\nendstream\nendobj";
      return  $res;
    }
  }
  protected function  o_extGState($id,  $action,  $options = "") {
    static  $valid_params =  array("LW",  "LC",  "LC",  "LJ",  "ML",
                                   "D",  "RI",  "OP",  "op",  "OPM",
                                   "Font",  "BG",  "BG2",  "UCR",
                                   "TR",  "TR2",  "HT",  "FL",
                                   "SM",  "SA",  "BM",  "SMask",
                                   "CA",  "ca",  "AIS",  "TK");
    if  ($action !==  "new") {
      $o = & $this->objects[$id];
    }
    switch  ($action) {
    case  "new":
      $this->objects[$id] =  array('t' => 'extGState',  'info' => $options);
      $this->numStates++;
      $this->o_pages($this->currentNode,  'extGState',  array("objNum" => $id,  "stateNum" => $this->numStates));
      break;
    case  "out":
      $res = "\n$id 0 obj\n<< /Type /ExtGState\n";
      foreach ($o["info"] as  $k => $v) {
        if  ( !in_array($k, $valid_params))
          continue;
        $res.=  "/$k $v\n";
      }
      $res.= ">>\nendobj";
      return  $res;
    }
  }
  protected function  o_encryption($id, $action, $options = '') {
    if  ($action !== 'new') {
      $o = & $this->objects[$id];
    }
    switch ($action) {
    case  'new':
      $this->objects[$id] = array('t'=>'encryption', 'info'=>$options);
      $this->arc4_objnum = $id;
      $pad =  chr(0x28) .chr(0xBF) .chr(0x4E) .chr(0x5E) .chr(0x4E) .chr(0x75) .chr(0x8A) .chr(0x41)
             .chr(0x64) .chr(0x00) .chr(0x4E) .chr(0x56) .chr(0xFF) .chr(0xFA) .chr(0x01) .chr(0x08)
             .chr(0x2E) .chr(0x2E) .chr(0x00) .chr(0xB6) .chr(0xD0) .chr(0x68) .chr(0x3E) .chr(0x80)
             .chr(0x2F) .chr(0x0C) .chr(0xA9) .chr(0xFE) .chr(0x64) .chr(0x53) .chr(0x69) .chr(0x7A);
 
      $len =  mb_strlen($options['owner'], '8bit');
      if  ($len>32) {
        $owner =  substr($options['owner'], 0, 32);
      } else  if  ($len<32) {
        $owner =  $options['owner'].substr($pad, 0, 32-$len);
      } else {
        $owner =  $options['owner'];
      }
      $len =  mb_strlen($options['user'], '8bit');
      if  ($len>32) {
        $user =  substr($options['user'], 0, 32);
      } else  if  ($len<32) {
        $user =  $options['user'].substr($pad, 0, 32-$len);
      } else {
        $user =  $options['user'];
      }
      $tmp =  $this->md5_16($owner);
      $okey =  substr($tmp, 0, 5);
      $this->ARC4_init($okey);
      $ovalue = $this->ARC4($user);
      $this->objects[$id]['info']['O'] = $ovalue;
      $tmp =  $this->md5_16($user.$ovalue.chr($options['p']) .chr(255) .chr(255) .chr(255) .$this->fileIdentifier);
      $ukey =  substr($tmp, 0, 5);
      $this->ARC4_init($ukey);
      $this->encryptionKey =  $ukey;
      $this->encrypted = 1;
      $uvalue = $this->ARC4($pad);
      $this->objects[$id]['info']['U'] = $uvalue;
      $this->encryptionKey = $ukey;
      break;
    case  'out':
      $res =  "\n$id 0 obj\n<<";
      $res.= "\n/Filter /Standard";
      $res.= "\n/V 1";
      $res.= "\n/R 2";
      $res.= "\n/O (".$this->filterText($o['info']['O'], true, false) .')';
      $res.= "\n/U (".$this->filterText($o['info']['U'], true, false) .')';
      $o['info']['p'] =  (($o['info']['p']^255) +1) *-1;
      $res.= "\n/P ".($o['info']['p']);
      $res.= "\n>>\nendobj";
      return  $res;
    }
  }
  function md5_16($string) {
    $tmp =  md5($string);
    $out = '';
    for  ($i = 0;$i <= 30;$i = $i+2) {
      $out.= chr(hexdec(substr($tmp, $i, 2)));
    }
    return  $out;
  }
  function encryptInit($id) {
    $tmp =  $this->encryptionKey;
    $hex =  dechex($id);
    if  (mb_strlen($hex, '8bit') <6) {
      $hex =  substr('000000', 0, 6-mb_strlen($hex, '8bit')) .$hex;
    }
    $tmp.=  chr(hexdec(substr($hex, 4, 2))) .chr(hexdec(substr($hex, 2, 2))) .chr(hexdec(substr($hex, 0, 2))) .chr(0) .chr(0);
    $key =  $this->md5_16($tmp);
    $this->ARC4_init(substr($key, 0, 10));
  }
  function ARC4_init($key = '') {
    $this->arc4 =  '';
    if  (mb_strlen($key, '8bit') == 0) {
      return;
    }
    $k =  '';
    while (mb_strlen($k, '8bit') <256) {
      $k.= $key;
    }
    $k = substr($k, 0, 256);
    for  ($i = 0;$i<256;$i++) {
      $this->arc4.=  chr($i);
    }
    $j = 0;
    for  ($i = 0;$i<256;$i++) {
      $t =  $this->arc4[$i];
      $j =  ($j + ord($t)  + ord($k[$i])) %256;
      $this->arc4[$i] = $this->arc4[$j];
      $this->arc4[$j] = $t;
    }
  }
  function ARC4($text) {
    $len = mb_strlen($text, '8bit');
    $a = 0;
    $b = 0;
    $c =  $this->arc4;
    $out = '';
    for  ($i = 0;$i<$len;$i++) {
      $a =  ($a+1) %256;
      $t =  $c[$a];
      $b =  ($b+ord($t)) %256;
      $c[$a] = $c[$b];
      $c[$b] = $t;
      $k =  ord($c[(ord($c[$a]) +ord($c[$b])) %256]);
      $out.= chr(ord($text[$i])  ^ $k);
    }
    return  $out;
  }
  function addLink($url, $x0, $y0, $x1, $y1) {
    $this->numObj++;
    $info =  array('type'=>'link', 'url'=>$url, 'rect'=>array($x0, $y0, $x1, $y1));
    $this->o_annotation($this->numObj, 'new', $info);
  }
  function addInternalLink($label, $x0, $y0, $x1, $y1) {
    $this->numObj++;
    $info =  array('type'=>'ilink', 'label'=>$label, 'rect'=>array($x0, $y0, $x1, $y1));
    $this->o_annotation($this->numObj, 'new', $info);
  }
  function setEncryption($userPass = '', $ownerPass = '', $pc = array()) {
    $p = bindec("11000000");
    $options =  array('print'=>4, 'modify'=>8, 'copy'=>16, 'add'=>32);
    foreach($pc as  $k=>$v) {
      if  ($v &&  isset($options[$k])) {
        $p+= $options[$k];
      } else  if  (isset($options[$v])) {
        $p+= $options[$v];
      }
    }
    if  ($this->arc4_objnum ==  0) {
      $this->numObj++;
      if  (mb_strlen($ownerPass) == 0) {
        $ownerPass = $userPass;
      }
      $this->o_encryption($this->numObj, 'new', array('user'=>$userPass, 'owner'=>$ownerPass, 'p'=>$p));
    }
  }
  function checkAllHere() {
  }
  function output($debug = false) {
    if  ($debug) {
      $this->options['compression'] = false;
    }
    if ($this->javascript) {
      $this->numObj++;
      $js_id = $this->numObj;
      $this->o_embedjs($js_id, 'new');
      $this->o_javascript(++$this->numObj, 'new', $this->javascript);
      $id =  $this->catalogId;
      $this->o_catalog($id, 'javascript', $js_id);
    }
    if  ($this->arc4_objnum) {
      $this->ARC4_init($this->encryptionKey);
    }
    $this->checkAllHere();
    $xref = array();
    $content = '%PDF-1.3';
    $pos = mb_strlen($content, '8bit');
    foreach($this->objects as  $k=>$v) {
      $tmp = 'o_'.$v['t'];
      $cont = $this->$tmp($k, 'out');
      $content.= $cont;
      $xref[] = $pos;
      $pos+= mb_strlen($cont, '8bit');
    }
    $content.= "\nxref\n0 ".(count($xref) +1) ."\n0000000000 65535 f \n";
    foreach($xref as  $p) {
      $content.= str_pad($p,  10,  "0",  STR_PAD_LEFT)  . " 00000 n \n";
    }
    $content.= "trailer\n<<\n/Size ".(count($xref) +1) ."\n/Root 1 0 R\n/Info $this->infoObject 0 R\n";
    if  ($this->arc4_objnum > 0) {
      $content.=  "/Encrypt $this->arc4_objnum 0 R\n";
    }
    if  (mb_strlen($this->fileIdentifier, '8bit')) {
      $content.=  "/ID[<$this->fileIdentifier><$this->fileIdentifier>]\n";
    }
    $content.=  ">>\nstartxref\n$pos\n%%EOF\n";
    return  $content;
  }
  function newDocument($pageSize = array(0, 0, 612, 792)) {
    $this->numObj = 0;
    $this->objects =  array();
    $this->numObj++;
    $this->o_catalog($this->numObj, 'new');
    $this->numObj++;
    $this->o_outlines($this->numObj, 'new');
    $this->numObj++;
    $this->o_pages($this->numObj, 'new');
    $this->o_pages($this->numObj, 'mediaBox', $pageSize);
    $this->currentNode =  3;
    $this->numObj++;
    $this->o_procset($this->numObj, 'new');
    $this->numObj++;
    $this->o_info($this->numObj, 'new');
    $this->numObj++;
    $this->o_page($this->numObj, 'new');
    $this->firstPageId =  $this->currentContents;
  }
  function openFont($font) {
    $pos = strrpos($font, '/');
    if  ($pos === false) {
      $dir =  './';
      $name =  $font;
    } else {
      $dir = substr($font, 0, $pos+1);
      $name = substr($font, $pos+1);
    }
    $fontcache = $this->fontcache;
    if ($fontcache == '') {
      $fontcache = $dir;
    }
    $this->addMessage("openFont: $font - $name");
    $metrics_name = $name . ($this->isUnicode ? '.ufm' : '.afm');
    if ($this->isUnicode && !file_exists("$dir/$metrics_name")) { $metrics_name = $name . '.afm'; }
    $cache_name = "$metrics_name.php";
    $this->addMessage("metrics: $metrics_name, cache: $cache_name");
    if  (file_exists($fontcache . $cache_name)) {
      $this->addMessage("openFont: php file exists $fontcache$cache_name");
      $this->fonts[$font] = require($fontcache . $cache_name);
      if  (!isset($this->fonts[$font]['_version_']) ||  $this->fonts[$font]['_version_'] != $this->fontcacheVersion) {
        $this->addMessage('openFont: clear out, make way for new version.');
        $this->fonts[$font] = null;
        unset($this->fonts[$font]);
      }
    }
    else {
      $old_cache_name = "php_$metrics_name";
      if (file_exists($fontcache . $old_cache_name)) {
        $this->addMessage("openFont: php file doesn't exist $fontcache$cache_name, creating it from the old format");
        $old_cache = file_get_contents($fontcache . $old_cache_name);
        file_put_contents($fontcache . $cache_name, '<?php return ' . $old_cache . ';');
        return $this->openFont($font);
      }
    }
    if  (!isset($this->fonts[$font]) &&  file_exists($dir . $metrics_name)) {
      $this->addMessage("openFont: build php file from $dir$metrics_name");
      $data =  array();
      $data['codeToName'] = array(); 
      $data['isUnicode'] = (strtolower(substr($metrics_name, -3)) !== 'afm');
      $cidtogid = '';
      if ($data['isUnicode']) {
        $cidtogid = str_pad('', 256*256*2, "\x00");
      }
      $file =  file($dir . $metrics_name);
      foreach ($file as  $rowA) {
        $row = trim($rowA);
        $pos = strpos($row, ' ');
        if  ($pos) {
          $key =  substr($row, 0, $pos);
          switch  ($key) {
          case  'FontName':
          case  'FullName':
          case  'FamilyName':
          case  'Weight':
          case  'ItalicAngle':
          case  'IsFixedPitch':
          case  'CharacterSet':
          case  'UnderlinePosition':
          case  'UnderlineThickness':
          case  'Version':
          case  'EncodingScheme':
          case  'CapHeight':
          case  'XHeight':
          case  'Ascender':
          case  'Descender':
          case  'StdHW':
          case  'StdVW':
          case  'StartCharMetrics':
          case  'FontHeightOffset': 
            $data[$key] = trim(substr($row, $pos));
            break;
          case  'FontBBox':
            $data[$key] = explode(' ', trim(substr($row, $pos)));
            break;
          case  'C': 
            $bits = explode(';', trim($row));
            $dtmp = array();
            foreach($bits as  $bit) {
              $bits2 =  explode(' ', trim($bit));
              if  (mb_strlen($bits2[0], '8bit') == 0) continue;
              if  (count($bits2) >2) {
                $dtmp[$bits2[0]] = array();
                for  ($i = 1;$i<count($bits2);$i++) {
                  $dtmp[$bits2[0]][] = $bits2[$i];
                }
              } else  if  (count($bits2) == 2) {
                $dtmp[$bits2[0]] = $bits2[1];
              }
            }
            $c = (int)$dtmp['C'];
            $n = $dtmp['N'];
            $width = floatval($dtmp['WX']);
            if  ($c >= 0) {
              if ($c != hexdec($n)) {
                $data['codeToName'][$c] = $n;
              }
              $data['C'][$c] = $width;
            } else {
              $data['C'][$n] = $width;
            }
            if  (!isset($data['MissingWidth']) && $c == -1 && $n === '.notdef') {
              $data['MissingWidth'] = $width;
            }
            break;
          case  'U': 
            if (!$data['isUnicode']) break;
            $bits = explode(';', trim($row));
            $dtmp = array();
            foreach($bits as  $bit) {
              $bits2 =  explode(' ', trim($bit));
              if  (mb_strlen($bits2[0], '8bit') === 0) continue;
              if  (count($bits2) >2) {
                $dtmp[$bits2[0]] = array();
                for  ($i = 1;$i<count($bits2);$i++) {
                  $dtmp[$bits2[0]][] = $bits2[$i];
                }
              } else  if  (count($bits2) == 2) {
                $dtmp[$bits2[0]] = $bits2[1];
              }
            }
            $c = (int)$dtmp['U'];
            $n = $dtmp['N'];
            $glyph = $dtmp['G'];
            $width = floatval($dtmp['WX']);
            if  ($c >= 0) {
              if ($c >= 0 && $c < 0xFFFF && $glyph) {
                $cidtogid[$c*2] = chr($glyph >> 8);
                $cidtogid[$c*2 + 1] = chr($glyph & 0xFF);
              }
              if ($c != hexdec($n)) {
                $data['codeToName'][$c] = $n;
              }
              $data['C'][$c] = $width;
            } else {
              $data['C'][$n] = $width;
            }
            if  (!isset($data['MissingWidth']) && $c == -1 && $n === '.notdef') {
              $data['MissingWidth'] = $width;
            }
            break;
          case  'KPX':
            break; 
            $bits = explode(' ', trim($row));
            $data['KPX'][$bits[1]][$bits[2]] = $bits[3];
            break;
          }
        }
      }
      if  ($this->compressionReady && $this->options['compression']) {
        $data['CIDtoGID_Compressed'] = true;
        $cidtogid =  gzcompress($cidtogid,  6);
      }
      $data['CIDtoGID'] = base64_encode($cidtogid);
      $data['_version_'] = $this->fontcacheVersion;
      $this->fonts[$font] = $data;
      if ( is_dir(substr($fontcache,0,-1)) && is_writable(substr($fontcache,0,-1)) ) {
        file_put_contents($fontcache . $cache_name, '<?php return ' . var_export($data,  true) . ';');
      }
      $data = null;
    }
    if  (!isset($this->fonts[$font])) {
      $this->addMessage("openFont: no font file found for $font.  Do you need to run load_font.php?");
    }
  }
  function selectFont($fontName, $encoding =  '', $set =  true) {
    $ext = substr($fontName, -4);
    if  ($ext === '.afm' || $ext === '.ufm') {
      $fontName = substr($fontName, 0, mb_strlen($fontName)-4);
    }
    if  (!isset($this->fonts[$fontName])) {
      $this->addMessage("selectFont: selecting - $fontName - $encoding, $set");
      $this->openFont($fontName);
      if  (isset($this->fonts[$fontName])) {
        $this->numObj++;
        $this->numFonts++;
        $pos =  strrpos($fontName, '/');
        $name =  substr($fontName, $pos+1);
        $options =  array('name' => $name, 'fontFileName' => $fontName);
        if  (is_array($encoding)) {
          if  (isset($encoding['encoding'])) {
            $options['encoding'] =  $encoding['encoding'];
          }
          if  (isset($encoding['differences'])) {
            $options['differences'] =  $encoding['differences'];
          }
        } else  if  (mb_strlen($encoding, '8bit')) {
          $options['encoding'] =  $encoding;
        }
        $fontObj =  $this->numObj;
        $this->o_font($this->numObj, 'new', $options);
        $this->fonts[$fontName]['fontNum'] =  $this->numFonts;
        $basefile =  $fontName;
        if  (file_exists($basefile.'.pfb')) {
          $fbtype =  'pfb';
        } else  if  (file_exists($basefile.'.ttf')) {
          $fbtype =  'ttf';
        } else {
          $fbtype =  '';
        }
        $fbfile =  $basefile.'.'.$fbtype;
        $this->addMessage('selectFont: checking for - '.$fbfile);
        if  (mb_strlen($fbtype, '8bit')) {
          $adobeFontName =  $this->fonts[$fontName]['FontName'];
          $this->addMessage('selectFont: adding font file - '.$fbfile.' - '.$adobeFontName);
          $firstChar =  -1;
          $lastChar =  0;
          $widths =  array();
          $cid_widths = array();
          foreach ($this->fonts[$fontName]['C'] as  $num => $d) {
            if  (intval($num) >0 ||  $num ==  '0') {
              if (!$this->fonts[$fontName]['isUnicode']) {
                if  ($lastChar>0 &&  $num>$lastChar+1) {
                  for ($i =  $lastChar+1;$i<$num;$i++) {
                    $widths[] =  0;
                  }
                }
              }
              $widths[] =  $d;
              if ($this->fonts[$fontName]['isUnicode']) {
                $cid_widths[$num] =  $d;
              }
              if  ($firstChar ==  -1) {
                $firstChar =  $num;
              }
              $lastChar =  $num;
            }
          }
          if  (isset($options['differences'])) {
            foreach($options['differences'] as  $charNum => $charName) {
              if  ($charNum > $lastChar) {
                if (!$this->fonts[$fontName]['isUnicode']) {
                  for ($i =  $lastChar + 1; $i <=  $charNum; $i++) {
                    $widths[] =  0;
                  }
                }
                $lastChar =  $charNum;
              }
              if  (isset($this->fonts[$fontName]['C'][$charName])) {
                $widths[$charNum-$firstChar] =  $this->fonts[$fontName]['C'][$charName];
                if ($this->fonts[$fontName]['isUnicode']) {
                  $cid_widths[$charName] =  $this->fonts[$fontName]['C'][$charName];
                }
              }
            }
          }
          if ($this->fonts[$fontName]['isUnicode']) {
            $this->fonts[$fontName]['CIDWidths'] = $cid_widths;
          }
          $this->addMessage('selectFont: FirstChar = '.$firstChar);
          $this->addMessage('selectFont: LastChar = '.$lastChar);
          $widthid = -1;
          if (!$this->fonts[$fontName]['isUnicode']) {
            $this->numObj++;
            $this->o_contents($this->numObj, 'new', 'raw');
            $this->objects[$this->numObj]['c'].=  '[';
            foreach($widths as  $width) {
              $this->objects[$this->numObj]['c'].=  ' '.$width;
            }
            $this->objects[$this->numObj]['c'].=  ' ]';
            $widthid =  $this->numObj;
          }
          $missing_width = 500;
          $stemV = 70;
          if (isset($this->fonts[$fontName]['MissingWidth'])) {
            $missing_width =  $this->fonts[$fontName]['MissingWidth'];
          }
          if (isset($this->fonts[$fontName]['StdVW'])) {
            $stemV = $this->fonts[$fontName]['StdVW'];
          } elseif (isset($this->fonts[$fontName]['Weight']) && preg_match('!(bold|black)!i', $this->fonts[$fontName]['Weight'])) {
            $stemV = 120;
          }
          $data =  file_get_contents($fbfile);
          $this->numObj++;
          $fontDescriptorId =  $this->numObj;
          $this->numObj++;
          $pfbid =  $this->numObj;
          $flags =  0;
          if  ($this->fonts[$fontName]['ItalicAngle'] !=  0) {
            $flags+=  pow(2, 6);
          }
          if  ($this->fonts[$fontName]['IsFixedPitch'] === 'true') {
            $flags+=  1;
          }
          $flags+=  pow(2, 5); 
          $list =  array(
            'Ascent' => 'Ascender',
            'CapHeight' => 'CapHeight',
            'MissingWidth' => 'MissingWidth',
            'Descent' => 'Descender',
            'FontBBox' => 'FontBBox',
            'ItalicAngle' => 'ItalicAngle'
          );
          $fdopt =  array(
            'Flags' => $flags,
            'FontName' => $adobeFontName,
            'StemV' => $stemV
          );
          foreach($list as  $k => $v) {
            if  (isset($this->fonts[$fontName][$v])) {
              $fdopt[$k] =  $this->fonts[$fontName][$v];
            }
          }
          if  ($fbtype === 'pfb') {
            $fdopt['FontFile'] =  $pfbid;
          } else  if  ($fbtype === 'ttf') {
            $fdopt['FontFile2'] =  $pfbid;
          }
          $this->o_fontDescriptor($fontDescriptorId, 'new', $fdopt);
          $this->o_contents($this->numObj, 'new');
          $this->objects[$pfbid]['c'].=  $data;
          if  ($fbtype === 'pfb') {
            $l1 =  strpos($data, 'eexec') +6;
            $l2 =  strpos($data, '00000000') -$l1;
            $l3 =  mb_strlen($data, '8bit') -$l2-$l1;
            $this->o_contents($this->numObj, 'add', array('Length1' => $l1, 'Length2' => $l2, 'Length3' => $l3));
          } else  if  ($fbtype == 'ttf') {
            $l1 =  mb_strlen($data, '8bit');
            $this->o_contents($this->numObj, 'add', array('Length1' => $l1));
          }
          $tmp =  array(
            'BaseFont' => $adobeFontName,
            'MissingWidth' => $missing_width,
            'Widths' => $widthid,
            'FirstChar' => $firstChar,
            'LastChar' => $lastChar,
            'FontDescriptor' => $fontDescriptorId,
          );
          if  ($fbtype === 'ttf') {
            $tmp['SubType'] =  'TrueType';
          }
          $this->addMessage('adding extra info to font.('.$fontObj.')');
          foreach($tmp as  $fk => $fv) {
            $this->addMessage($fk." : ".$fv);
          }
          $this->o_font($fontObj, 'add', $tmp);
        } else {
          $this->addMessage('selectFont: pfb or ttf file not found, ok if this is one of the 14 standard fonts');
        }
        if  (isset($options['differences'])) {
          $this->fonts[$fontName]['differences'] =  $options['differences'];
        }
      }
    }
    if  ($set &&  isset($this->fonts[$fontName])) {
      $this->currentBaseFont =  $fontName;
      $this->currentFont =  $this->currentBaseFont;
      $this->currentFontNum =  $this->fonts[$this->currentFont]['fontNum'];
    }
    return  $this->currentFontNum;
  }
  function setCurrentFont() {
    $this->currentFont =  $this->currentBaseFont;
    $this->currentFontNum =  $this->fonts[$this->currentFont]['fontNum'];
  }
  function getFirstPageId() {
    return  $this->firstPageId;
  }
  function addContent($content) {
    $this->objects[$this->currentContents]['c'].=  $content;
  }
  function setColor($color, $force = false) {
    $new_color = array($color[0], $color[1], $color[2], isset($color[3]) ? $color[3] : null);
    if (!$force && $this->currentColour == $new_color) return;
    if (isset($new_color[3])) {
      $this->currentColour = $new_color;
      $this->objects[$this->currentContents]['c'] .= vsprintf("\n%.3F %.3F %.3F %.3F k", $this->currentColour);
    }
    elseif (isset($new_color[2])) {
      $this->currentColour = $new_color;
      $this->objects[$this->currentContents]['c'] .= vsprintf("\n%.3F %.3F %.3F rg", $this->currentColour);
    }
  }
  function setStrokeColor($color, $force =  false) {
    $new_color = array($color[0], $color[1], $color[2], isset($color[3]) ? $color[3] : null);
    if (!$force && $this->currentStrokeColour == $new_color) return;
    if (isset($new_color[3])) {
      $this->currentStrokeColour = $new_color;
      $this->objects[$this->currentContents]['c'] .= vsprintf("\n%.3F %.3F %.3F %.3F K", $this->currentStrokeColour);
    }
    elseif (isset($new_color[2])) {
      $this->currentStrokeColour = $new_color;
      $this->objects[$this->currentContents]['c'] .= vsprintf("\n%.3F %.3F %.3F RG", $this->currentStrokeColour);
    }
  }
  function setGraphicsState($parameters) {
    $this->numObj++;
    $this->o_extGState($this->numObj,  'new',  $parameters);
    $this->objects[ $this->currentContents ]['c'].=  "\n/GS$this->numStates gs";
  }
  function setLineTransparency($mode, $opacity) {
    static $blend_modes = array("Normal", "Multiply", "Screen",
                                "Overlay", "Darken", "Lighten",
                                "ColorDogde", "ColorBurn", "HardLight",
                                "SoftLight", "Difference", "Exclusion");
    if ( !in_array($mode, $blend_modes) )
      $mode = "Normal";
    if ( $mode === $this->currentLineTransparency["mode"]  &&
         $opacity == $this->currentLineTransparency["opacity"] )
      return;
    $this->currentLineTransparency["mode"] = $mode;
    $this->currentLineTransparency["opacity"] = $opacity;
    $options = array("BM" => "/$mode",
                     "CA" => (float)$opacity);
    $this->setGraphicsState($options);
  }
  function setFillTransparency($mode, $opacity) {
    static $blend_modes = array("Normal", "Multiply", "Screen",
                                "Overlay", "Darken", "Lighten",
                                "ColorDogde", "ColorBurn", "HardLight",
                                "SoftLight", "Difference", "Exclusion");
    if ( !in_array($mode, $blend_modes) )
      $mode = "Normal";
    if ( $mode === $this->currentFillTransparency["mode"]  &&
         $opacity == $this->currentFillTransparency["opacity"] )
      return;
    $this->currentFillTransparency["mode"] = $mode;
    $this->currentFillTransparency["opacity"] = $opacity;
    $options = array("BM" => "/$mode",
                     "ca" => (float)$opacity);
    $this->setGraphicsState($options);
  }
  function line($x1, $y1, $x2, $y2) {
    $this->objects[$this->currentContents]['c'] .= sprintf("\n%.3F %.3F m %.3F %.3F l S", $x1, $y1, $x2, $y2);
  }
  function curve($x0, $y0, $x1, $y1, $x2, $y2, $x3, $y3) {
    $this->objects[$this->currentContents]['c'] .=
      sprintf("\n%.3F %.3F m %.3F %.3F %.3F %.3F %.3F %.3F c S", $x0, $y0, $x1, $y1, $x2, $y2, $x3, $y3);
  }
  function partEllipse($x0, $y0, $astart, $afinish, $r1, $r2 =  0, $angle =  0, $nSeg =  8) {
    $this->ellipse($x0, $y0, $r1, $r2, $angle, $nSeg, $astart, $afinish, false);
  }
  function filledEllipse($x0, $y0, $r1, $r2 =  0, $angle =  0, $nSeg =  8, $astart =  0, $afinish =  360) {
    return  $this->ellipse($x0, $y0, $r1, $r2 =  0, $angle, $nSeg, $astart, $afinish, true, true);
  }
  function ellipse($x0, $y0, $r1, $r2 =  0, $angle =  0, $nSeg =  8, $astart =  0, $afinish =  360, $close =  true, $fill =  false) {
    if  ($r1 ==  0) {
      return;
    }
    if  ($r2 ==  0) {
      $r2 =  $r1;
    }
    if  ($nSeg < 2) {
      $nSeg =  2;
    }
    $astart =  deg2rad((float)$astart);
    $afinish =  deg2rad((float)$afinish);
    $totalAngle = $afinish-$astart;
    $dt =  $totalAngle/$nSeg;
    $dtm =  $dt/3;
    if  ($angle !=  0) {
      $a =  -1*deg2rad((float)$angle);
      $this->objects[$this->currentContents]['c'] .=
        sprintf("\n q %.3F %.3F %.3F %.3F %.3F %.3F cm", cos($a), -sin($a), sin($a), cos($a), $x0, $y0);
      $x0 =  0;
      $y0 =  0;
    }
    $t1 =  $astart;
    $a0 =  $x0 + $r1*cos($t1);
    $b0 =  $y0 + $r2*sin($t1);
    $c0 =  -$r1 * sin($t1);
    $d0 =  $r2 * cos($t1);
    $this->objects[$this->currentContents]['c'] .= sprintf("\n%.3F %.3F m ", $a0, $b0);
    for  ($i = 1; $i <=  $nSeg; $i++) {
      $t1 =  $i * $dt + $astart;
      $a1 =  $x0 + $r1 * cos($t1);
      $b1 =  $y0 + $r2 * sin($t1);
      $c1 = -$r1 * sin($t1);
      $d1 =  $r2 * cos($t1);
      $this->objects[$this->currentContents]['c'] .=
        sprintf("\n%.3F %.3F %.3F %.3F %.3F %.3F c", ($a0+$c0*$dtm), ($b0+$d0*$dtm), ($a1-$c1*$dtm), ($b1-$d1*$dtm), $a1, $b1);
      $a0 =  $a1;
      $b0 =  $b1;
      $c0 =  $c1;
      $d0 =  $d1;
    }
    if  ($fill) {
      $this->objects[$this->currentContents]['c'].=  ' f';
    } else if ($close) {
      $this->objects[$this->currentContents]['c'].=  ' s'; 
    } else {
      $this->objects[$this->currentContents]['c'].=  ' S';
    }
    if  ($angle !=  0) {
      $this->objects[$this->currentContents]['c'].=  ' Q';
    }
  }
  function setLineStyle($width =  1, $cap =  '', $join =  '', $dash =  '', $phase =  0) {
    $string =  '';
    if  ($width>0) {
      $string.=  "$width w";
    }
    $ca =  array('butt' => 0, 'round' => 1, 'square' => 2);
    if  (isset($ca[$cap])) {
      $string.=  " $ca[$cap] J";
    }
    $ja =  array('miter' => 0, 'round' => 1, 'bevel' => 2);
    if  (isset($ja[$join])) {
      $string.=  " $ja[$join] j";
    }
    if  (is_array($dash)) {
      $string.=  ' [ ' . implode(' ', $dash) . " ] $phase d";
    }
    $this->currentLineStyle =  $string;
    $this->objects[$this->currentContents]['c'].=  "\n$string";
  }
  function polygon($p, $np, $f = false) {
    $this->objects[$this->currentContents]['c'].=  sprintf("\n%.3F %.3F m ", $p[0], $p[1]);
    for  ($i =  2; $i < $np * 2; $i =  $i + 2) {
      $this->objects[$this->currentContents]['c'].=  sprintf("%.3F %.3F l ", $p[$i], $p[$i+1]);
    }
    if  ($f) {
      $this->objects[$this->currentContents]['c'].=  ' f';
    } else {
      $this->objects[$this->currentContents]['c'].=  ' S';
    }
  }
  function filledRectangle($x1, $y1, $width, $height) {
    $this->objects[$this->currentContents]['c'].=  sprintf("\n%.3F %.3F %.3F %.3F re f", $x1, $y1, $width, $height);
  }
  function rectangle($x1, $y1, $width, $height) {
    $this->objects[$this->currentContents]['c'].=  sprintf("\n%.3F %.3F %.3F %.3F re S", $x1, $y1, $width, $height);
  }
  function save() {
    $this->objects[$this->currentContents]['c'].=  "\nq";
  }
  function restore() {
    $this->objects[$this->currentContents]['c'].=  "\nQ";
  }
  function clippingRectangle($x1, $y1, $width, $height) {
    $this->save();
    $this->objects[$this->currentContents]['c'].=  sprintf("\n%.3F %.3F %.3F %.3F re W n", $x1, $y1, $width, $height);
  }
  function clippingEnd() {
    $this->restore();
  }
  function scale($s_x, $s_y, $x, $y) {
    $y = $this->currentPageSize["height"] - $y;
    $tm = array(
      $s_x,        0,
      0,           $s_y,
      $x*(1-$s_x), $y*(1-$s_y)
    );
    $this->transform($tm);
  }
  function translate($t_x, $t_y) {
    $tm = array(
      1,    0,
      0,    1,
      $t_x, -$t_y
    );
    $this->transform($tm);
  }
  function rotate($angle, $x, $y) {
    $y = $this->currentPageSize["height"] - $y;
    $a = deg2rad($angle);
    $cos_a = cos($a);
    $sin_a = sin($a);
    $tm = array(
      $cos_a,                     -$sin_a,
      $sin_a,                     $cos_a,
      $x - $sin_a*$y - $cos_a*$x, $y - $cos_a*$y + $sin_a*$x, 
    );
    $this->transform($tm);
  }
  function skew($angle_x, $angle_y, $x, $y) {
    $y = $this->currentPageSize["height"] - $y;
    $tan_x = tan(deg2rad($angle_x));
    $tan_y = tan(deg2rad($angle_y));
    $tm = array(
      1,         -$tan_y,
      -$tan_x,   1,
      $tan_x*$y, $tan_y*$x, 
    );
    $this->transform($tm);
  }
  function transform($tm) {
    $this->objects[$this->currentContents]['c'].=
      vsprintf("\n %.3F %.3F %.3F %.3F %.3F %.3F cm", $tm);
  }
  function newPage($insert =  0, $id =  0, $pos =  'after') {
    if  ($this->nStateStack) {
      for  ($i =  $this->nStateStack;$i >=  1;$i--) {
        $this->restoreState($i);
      }
    }
    $this->numObj++;
    if  ($insert) {
      $rid =  $this->objects[$id]['onPage'];
      $opt =  array('rid' => $rid, 'pos' => $pos);
      $this->o_page($this->numObj, 'new', $opt);
    } else {
      $this->o_page($this->numObj, 'new');
    }
    if  ($this->nStateStack) {
      for  ($i =  1;$i <=  $this->nStateStack;$i++) {
        $this->saveState($i);
      }
    }
    if  (isset($this->currentColour)) {
      $this->setColor($this->currentColour, true);
    }
    if  (isset($this->currentStrokeColour)) {
      $this->setStrokeColor($this->currentStrokeColour, true);
    }
    if  (mb_strlen($this->currentLineStyle, '8bit')) {
      $this->objects[$this->currentContents]['c'].=  "\n$this->currentLineStyle";
    }
    return  $this->currentContents;
  }
  function stream($options =  '') {
    if  (!is_array($options)) {
      $options =  array();
    }
    if  ( headers_sent())
      die("Unable to stream pdf: headers already sent");
    $debug = empty($options['compression']);
    $tmp =  ltrim($this->output($debug));
    header("Cache-Control: private");
    header("Content-type: application/pdf");
    header("Content-Length: " . mb_strlen($tmp, '8bit'));
    $fileName =  (isset($options['Content-Disposition']) ?  $options['Content-Disposition'] :  'file.pdf');
    if  ( !isset($options["Attachment"]))
      $options["Attachment"] =  true;
    $attachment =  $options["Attachment"] ?  "attachment" :  "inline";
    header("Content-Disposition: $attachment; filename=\"$fileName\"");
    if  (isset($options['Accept-Ranges']) &&  $options['Accept-Ranges'] ==  1) {
      header("Accept-Ranges: " . mb_strlen($tmp, '8bit'));
    }
    echo  $tmp;
    flush();
  }
  function getFontHeight($size) {
    if  (!$this->numFonts) {
      $this->selectFont($this->defaultFont);
    }
    $font = $this->fonts[$this->currentFont];
    if ( isset($font['Ascender']) && isset($font['Descender']) ) {
      $h =  $font['Ascender']-$font['Descender'];
    }
    else {
      $h =  $font['FontBBox'][3]-$font['FontBBox'][1];
    }
    if (isset($font['FontHeightOffset'])) {
      $h += (int)$font['FontHeightOffset'];
    }
    return  $size*$h/1000;
  }
  function getFontDescender($size) {
    if  (!$this->numFonts) {
      $this->selectFont($this->defaultFont);
    }
    $h = $this->fonts[$this->currentFont]['Descender'];
    return  $size*$h/1000;
  }
  function filterText($text, $bom = true, $convert_encoding = true) {
    if (!$this->numFonts) {
      $this->selectFont($this->defaultFont);
    }
    if ($convert_encoding) {
      $cf = $this->currentFont;
      if (isset($this->fonts[$cf]) && $this->fonts[$cf]['isUnicode']) {
        $text =  $this->utf8toUtf16BE($text, $bom);
      } else {
        $text = mb_convert_encoding($text, self::$targetEncoding, 'UTF-8');
      }
    }
    return strtr($text, array(')' => '\\)', '(' => '\\(', '\\' => '\\\\', chr(13) => '\r'));
  }
  function utf8toCodePointsArray(&$text) {
    $length = mb_strlen($text, '8bit'); 
    $unicode = array(); 
    $bytes = array(); 
    $numbytes = 1; 
    for ($i = 0; $i < $length; $i++) {
      $c = ord($text[$i]); 
      if (count($bytes) === 0) { 
        if ($c <= 0x7F) {
          $unicode[] = $c; 
          $numbytes = 1;
        } elseif (($c >> 0x05) === 0x06) { 
          $bytes[] = ($c - 0xC0) << 0x06;
          $numbytes = 2;
        } elseif (($c >> 0x04) === 0x0E) { 
          $bytes[] = ($c - 0xE0) << 0x0C;
          $numbytes = 3;
        } elseif (($c >> 0x03) === 0x1E) { 
          $bytes[] = ($c - 0xF0) << 0x12;
          $numbytes = 4;
        } else {
          $unicode[] = 0xFFFD;
          $bytes = array();
          $numbytes = 1;
        }
      } elseif (($c >> 0x06) === 0x02) { 
        $bytes[] = $c - 0x80;
        if (count($bytes) === $numbytes) {
          $c = $bytes[0];
          for ($j = 1; $j < $numbytes; $j++) {
            $c += ($bytes[$j] << (($numbytes - $j - 1) * 0x06));
          }
          if ((($c >= 0xD800) AND ($c <= 0xDFFF)) OR ($c >= 0x10FFFF)) {
            $unicode[] = 0xFFFD; 
          } else {
            $unicode[] = $c; 
          }
          $bytes = array();
          $numbytes = 1;
        }
      } else {
        $unicode[] = 0xFFFD;
        $bytes = array();
        $numbytes = 1;
      }
    }
    return $unicode;
  }
  function utf8toUtf16BE(&$text, $bom = true) {
    $cf =  $this->currentFont;
    if (!$this->fonts[$cf]['isUnicode']) return $text;
    $out = $bom ? "\xFE\xFF" : '';
    $unicode = $this->utf8toCodePointsArray($text);
    foreach ($unicode as $c) {
      if ($c === 0xFFFD) {
        $out .= "\xFF\xFD"; 
      } elseif ($c < 0x10000) {
        $out .= chr($c >> 0x08) . chr($c & 0xFF);
       } else {
        $c -= 0x10000;
        $w1 = 0xD800 | ($c >> 0x10);
        $w2 = 0xDC00 | ($c & 0x3FF);
        $out .= chr($w1 >> 0x08) . chr($w1 & 0xFF) . chr($w2 >> 0x08) . chr($w2 & 0xFF);
      }
    }
    return $out;
  }
  function PRVTgetTextPosition($x, $y, $angle, $size, $wa, $text) {
    $w =  $this->getTextWidth($size, $text);
    $words =  explode(' ', $text);
    $nspaces =  count($words) -1;
    $w+=  $wa*$nspaces;
    $a =  deg2rad((float)$angle);
    return  array(cos($a) *$w+$x, -sin($a) *$w+$y);
  }
  function PRVTcheckTextDirective(&$text, $i, &$f) {
    return  0;
    $x =  0;
    $y =  0;
    return  $this->PRVTcheckTextDirective1($text, $i, $f, 0, $x, $y);
  }
  function PRVTcheckTextDirective1(&$text, $i, &$f, $final, &$x, &$y, $size =  0, $angle =  0, $wordSpaceAdjust =  0) {
    return  0;
    $directive =  0;
    $j =  $i;
    if  ($text[$j] === '<') {
      $j++;
      switch ($text[$j]) {
      case  '/':
        $j++;
        if  (mb_strlen($text) <=  $j) {
          return  $directive;
        }
        switch ($text[$j]) {
        case  'b':
        case  'i':
          $j++;
          if  ($text[$j] === '>') {
            $p =  mb_strrpos($this->currentTextState, $text[$j-1]);
            if  ($p !==  false) {
              $this->currentTextState =  mb_substr($this->currentTextState, 0, $p) .substr($this->currentTextState, $p+1);
            }
            $directive =  $j-$i+1;
          }
          break;
        case  'c':
          $j++;
          $k =  mb_strpos($text, '>', $j);
          if  ($k !==  false &&  $text[$j] === ':') {
            $directive =  $k-$i+1;
            $f =  0;
            $tmp =  mb_substr($text, $j+1, $k-$j-1);
            $b1 =  mb_strpos($tmp, ':');
            if  ($b1 !==  false) {
              $func =  mb_substr($tmp, 0, $b1);
              $parm =  mb_substr($tmp, $b1+1);
            } else {
              $func =  $tmp;
              $parm =  '';
            }
            if  (!isset($func) ||  !mb_strlen(trim($func), '8bit')) {
              $directive =  0;
            } else {
              if  ($final) {
                $tmp =  $this->PRVTgetTextPosition($x, $y, $angle, $size, $wordSpaceAdjust, mb_substr($text, 0, $i));
                $info =  array('x' => $tmp[0], 'y' => $tmp[1], 'angle' => $angle, 'status' => 'end', 'p' => $parm, 'nCallback' => $this->nCallback);
                $x =  $tmp[0];
                $y =  $tmp[1];
                $ret =  $this->$func($info);
                if  (is_array($ret)) {
                  foreach($ret as  $rk => $rv) {
                    switch ($rk) {
                    case  'x':
                    case  'y':
                      $$rk =  $rv;
                      break;
                    }
                  }
                }
                $this->nCallback--;
                if  ($this->nCallback<0) {
                  $this->nCallBack =  0;
                }
              }
            }
          }
          break;
        }
        break;
      case  'b':
      case  'i':
        $j++;
        if  ($text[$j] === '>') {
          $this->currentTextState.=  $text[$j-1];
          $directive =  $j-$i+1;
        }
        break;
      case  'C':
        $noClose =  1;
      case  'c':
        $j++;
        $k =  mb_strpos($text, '>', $j);
        if  ($k !==  false &&  $text[$j] ===  ':') {
          $directive =  $k-$i+1;
          $f =  0;
          $tmp =  mb_substr($text, $j+1, $k-$j-1);
          $b1 =  mb_strpos($tmp, ':');
          if  ($b1 !==  false) {
            $func =  mb_substr($tmp, 0, $b1);
            $parm =  mb_substr($tmp, $b1+1);
          } else {
            $func =  $tmp;
            $parm =  '';
          }
          if  (!isset($func) ||  !mb_strlen(trim($func), '8bit')) {
            $directive =  0;
          } else {
            if  ($final) {
              $tmp =  $this->PRVTgetTextPosition($x, $y, $angle, $size, $wordSpaceAdjust, mb_substr($text, 0, $i));
              $info =  array(
                'x' => $tmp[0],
                'y' => $tmp[1],
                'angle' => $angle,
                'status' => 'start',
                'p' => $parm,
                'f' => $func,
                'height' => $this->getFontHeight($size),
                'descender' => $this->getFontDescender($size)
              );
              $x =  $tmp[0];
              $y =  $tmp[1];
              if  (!isset($noClose) ||  !$noClose) {
                $this->nCallback++;
                $info['nCallback'] =  $this->nCallback;
                $this->callback[$this->nCallback] =  $info;
              }
              $ret =  $this->$func($info);
              if  (is_array($ret)) {
                foreach($ret as  $rk => $rv) {
                  switch ($rk) {
                  case  'x':
                  case  'y':
                    $$rk =  $rv;
                    break;
                  }
                }
              }
            }
          }
        }
        break;
      }
    }
    return  $directive;
  }
  function toUpper($matches) {
    return mb_strtoupper($matches[0]);
  }
  function addText($x, $y, $size, $text, $angle =  0, $wordSpaceAdjust =  0, $charSpaceAdjust =  0, $smallCaps = false) {
    if  (!$this->numFonts) {
      $this->selectFont($this->defaultFont);
    }
    if ($smallCaps) {
      $text = preg_replace_callback("/\p{Ll}/u", array($this, "toUpper"), $text);
    }
    if  ($this->nCallback>0) {
      for  ($i =  $this->nCallback;$i>0;$i--) {
        $info =  array('x' => $x,
                       'y' => $y,
                       'angle' => $angle,
                       'status' => 'sol',
                       'p'         => $this->callback[$i]['p'],
                       'nCallback' => $this->callback[$i]['nCallback'],
                       'height'    => $this->callback[$i]['height'],
                       'descender' => $this->callback[$i]['descender']);
        $func =  $this->callback[$i]['f'];
        $this->$func($info);
      }
    }
    if  ($angle ==  0) {
      $this->objects[$this->currentContents]['c'].=  sprintf("\nBT %.3F %.3F Td", $x, $y);
    } else {
      $a =  deg2rad((float)$angle);
      $this->objects[$this->currentContents]['c'].=
        sprintf("\nBT %.3F %.3F %.3F %.3F %.3F %.3F Tm", cos($a), -sin($a), sin($a), cos($a), $x, $y);
    }
    if  ($wordSpaceAdjust !=  0 ||  $wordSpaceAdjust !=  $this->wordSpaceAdjust) {
      $this->wordSpaceAdjust =  $wordSpaceAdjust;
      $this->objects[$this->currentContents]['c'].=  sprintf(" %.3F Tw", $wordSpaceAdjust);
    }
    if  ($charSpaceAdjust !=  0 ||  $charSpaceAdjust !=  $this->charSpaceAdjust) {
      $this->charSpaceAdjust =  $charSpaceAdjust;
      $this->objects[$this->currentContents]['c'].=  sprintf(" %.3F Tc", $charSpaceAdjust);
    }
    $len =  mb_strlen($text);
    $start =  0;
    if  ($start < $len) {
      $part =  $text; 
      $place_text = $this->filterText($part, false);
      $cf = $this->currentFont;
      if ($this->fonts[$cf]['isUnicode'] && $wordSpaceAdjust != 0) {
        $space_scale = 1000 / $size;
        $place_text = str_replace(' ', ' ) '.(-round($space_scale*$wordSpaceAdjust)).' (', $place_text);
      }
      $this->objects[$this->currentContents]['c'].=  " /F$this->currentFontNum ".sprintf('%.1F Tf ', $size);
      $this->objects[$this->currentContents]['c'].=  " [($place_text)] TJ";
    }
    $this->objects[$this->currentContents]['c'].=  ' ET';
    if  ($this->nCallback>0) {
      for  ($i =  $this->nCallback;$i>0;$i--) {
        $tmp =  $this->PRVTgetTextPosition($x, $y, $angle, $size, $wordSpaceAdjust, $text);
        $info =  array(
          'x' => $tmp[0],
          'y' => $tmp[1],
          'angle' => $angle,
          'status' => 'eol',
          'p'         => $this->callback[$i]['p'],
          'nCallback' => $this->callback[$i]['nCallback'],
          'height'    => $this->callback[$i]['height'],
          'descender' => $this->callback[$i]['descender']
        );
        $func =  $this->callback[$i]['f'];
        $this->$func($info);
      }
    }
  }
  function getTextWidth($size, $text, $word_spacing =  0, $char_spacing =  0) {
    $store_currentTextState =  $this->currentTextState;
    if (!$this->numFonts) {
      $this->selectFont($this->defaultFont);
    }
    $text = "$text";
    $w = 0;
    $cf = $this->currentFont;
    $current_font = $this->fonts[$cf];
    $space_scale = 1000 / $size;
    $n_spaces = 0;
    if ( $current_font['isUnicode']) {
      $unicode = $this->utf8toCodePointsArray($text);
      foreach ($unicode as $char) {
        if ( isset($current_font['differences'][$char])) {
          $char = $current_font['differences'][$char];
        }
        if ( isset($current_font['C'][$char]) ) {
          $char_width = $current_font['C'][$char];
          $w += $char_width;
          if ( isset($current_font['codeToName'][$char]) && $current_font['codeToName'][$char] === 'space' ) {
            $w += $word_spacing * $space_scale;
            $n_spaces++;
          }
        }
      }
      if ( $char_spacing != 0 ) {
        $w += $char_spacing * $space_scale * (count($unicode) + $n_spaces);
      }
    } else {
      if ( $this->isUnicode ) { 
        $text = mb_convert_encoding($text, 'Windows-1252', 'UTF-8');
      }
      $len = mb_strlen($text, 'Windows-1252');
      for ($i = 0; $i < $len; $i++) {
        $char = ord($text[$i]);
        if ( isset($current_font['differences'][$char])) {
          $char = $current_font['differences'][$char];
        }
        if ( isset($current_font['C'][$char]) ) {
          $char_width = $current_font['C'][$char];
          $w += $char_width;
          if ( isset($current_font['codeToName'][$char]) && $current_font['codeToName'][$char] === 'space' ) {
            $w += $word_spacing * $space_scale;
            $n_spaces++;
          }
        }
      }
      if ( $char_spacing != 0 )  {
        $w += $char_spacing * $space_scale * ($len + $n_spaces);
      }
    }
    $this->currentTextState = $store_currentTextState;
    $this->setCurrentFont();
    return  $w*$size/1000;
  }
  function PRVTadjustWrapText($text, $actual, $width, &$x, &$adjust, $justification) {
    switch  ($justification) {
    case  'left':
      return;
    case  'right':
      $x+=  $width-$actual;
      break;
    case  'center':
    case  'centre':
      $x+=  ($width-$actual) /2;
      break;
    case  'full':
      $words =  explode(' ', $text);
      $nspaces =  count($words) -1;
      if  ($nspaces>0) {
        $adjust =  ($width-$actual) /$nspaces;
      } else {
        $adjust =  0;
      }
      break;
    }
  }
  function addTextWrap($x, $y, $width, $size, $text, $justification =  'left', $angle =  0, $test =  0) {
    $cf =  $this->currentFont;
    if ($this->fonts[$cf]['isUnicode']) {
        die("addTextWrap does not support Unicode yet!");
    }
    $store_currentTextState =  $this->currentTextState;
    if  (!$this->numFonts) {
      $this->selectFont($this->defaultFont);
    }
    if  ($width <=  0) {
      return  '';
    }
    $w =  0;
    $break =  0;
    $breakWidth =  0;
    $len =  mb_strlen($text);
    $cf =  $this->currentFont;
    $tw =  $width/$size*1000;
    for  ($i =  0;$i<$len;$i++) {
      $f =  1;
      $directive =  0;
      if  ($directive) {
        if  ($f) {
          $this->setCurrentFont();
          $cf =  $this->currentFont;
        }
        $i =  $i+$directive-1;
      } else {
        $cOrd =  ord($text[$i]);
        if  (isset($this->fonts[$cf]['differences'][$cOrd])) {
          $cOrd2 =  $this->fonts[$cf]['differences'][$cOrd];
        } else {
          $cOrd2 =  $cOrd;
        }
        if  (isset($this->fonts[$cf]['C'][$cOrd2])) {
          $w+=  $this->fonts[$cf]['C'][$cOrd2];
        }
        if  ($w>$tw) {
          if  ($break>0) {
            if  ($text[$break] ===  ' ') {
              $tmp =  mb_substr($text, 0, $break);
            } else {
              $tmp =  mb_substr($text, 0, $break+1);
            }
            $adjust =  0;
            $this->PRVTadjustWrapText($tmp, $breakWidth, $width, $x, $adjust, $justification);
            $this->currentTextState =  $store_currentTextState;
            $this->setCurrentFont();
            if  (!$test) {
              $this->addText($x, $y, $size, $tmp, $angle, $adjust);
            }
            return  mb_substr($text, $break+1);
          } else {
            $tmp =  mb_substr($text, 0, $i);
            $adjust =  0;
            $ctmp =  ord($text[$i]);
            if  (isset($this->fonts[$cf]['differences'][$ctmp])) {
              $ctmp =  $this->fonts[$cf]['differences'][$ctmp];
            }
            $tmpw =  ($w-$this->fonts[$cf]['C'][$ctmp]) *$size/1000;
            $this->PRVTadjustWrapText($tmp, $tmpw, $width, $x, $adjust, $justification);
            $this->currentTextState =  $store_currentTextState;
            $this->setCurrentFont();
            if  (!$test) {
              $this->addText($x, $y, $size, $tmp, $angle, $adjust);
            }
            return  mb_substr($text, $i);
          }
        }
        if  ($text[$i] ===  '-') {
          $break =  $i;
          $breakWidth =  $w*$size/1000;
        }
        if  ($text[$i] ===  ' ') {
          $break =  $i;
          $ctmp =  ord($text[$i]);
          if  (isset($this->fonts[$cf]['differences'][$ctmp])) {
            $ctmp =  $this->fonts[$cf]['differences'][$ctmp];
          }
          $breakWidth =  ($w-$this->fonts[$cf]['C'][$ctmp]) *$size/1000;
        }
      }
    }
    if  ($justification ===  'full') {
      $justification =  'left';
    }
    $adjust =  0;
    $tmpw =  $w*$size/1000;
    $this->PRVTadjustWrapText($text, $tmpw, $width, $x, $adjust, $justification);
    $this->currentTextState =  $store_currentTextState;
    $this->setCurrentFont();
    if  (!$test) {
      $this->addText($x, $y, $size, $text, $angle, $adjust);
    }
    return  '';
  }
  function saveState($pageEnd =  0) {
    if  ($pageEnd) {
      $opt =  $this->stateStack[$pageEnd];
      $this->setColor($opt['col'], true);
      $this->setStrokeColor($opt['str'], true);
      $this->objects[$this->currentContents]['c'].=  "\n".$opt['lin'];
    } else {
      $this->nStateStack++;
      $this->stateStack[$this->nStateStack] =  array(
        'col' => $this->currentColour,
        'str' => $this->currentStrokeColour,
        'lin' => $this->currentLineStyle
      );
    }
    $this->save();
  }
  function restoreState($pageEnd =  0) {
    if  (!$pageEnd) {
      $n =  $this->nStateStack;
      $this->currentColour =       $this->stateStack[$n]['col'];
      $this->currentStrokeColour = $this->stateStack[$n]['str'];
      $this->objects[$this->currentContents]['c'].=  "\n".$this->stateStack[$n]['lin'];
      $this->currentLineStyle =    $this->stateStack[$n]['lin'];
      $this->stateStack[$n] = null;
      unset($this->stateStack[$n]);
      $this->nStateStack--;
    }
    $this->restore();
  }
  function openObject() {
    $this->nStack++;
    $this->stack[$this->nStack] =  array('c' => $this->currentContents, 'p' => $this->currentPage);
    $this->numObj++;
    $this->o_contents($this->numObj, 'new');
    $this->currentContents =  $this->numObj;
    $this->looseObjects[$this->numObj] =  1;
    return  $this->numObj;
  }
  function reopenObject($id) {
    $this->nStack++;
    $this->stack[$this->nStack] =  array('c' => $this->currentContents, 'p' => $this->currentPage);
    $this->currentContents =  $id;
    if  (isset($this->objects[$id]['onPage'])) {
      $this->currentPage =  $this->objects[$id]['onPage'];
    }
  }
  function closeObject() {
    if  ($this->nStack>0) {
      $this->currentContents =  $this->stack[$this->nStack]['c'];
      $this->currentPage =  $this->stack[$this->nStack]['p'];
      $this->nStack--;
    }
  }
  function stopObject($id) {
    if  (isset($this->addLooseObjects[$id])) {
      $this->addLooseObjects[$id] =  '';
    }
  }
  function addObject($id, $options =  'add') {
    if  (isset($this->looseObjects[$id]) &&  $this->currentContents !=  $id) {
      switch ($options) {
      case  'all':
        $this->addLooseObjects[$id] =  'all';
      case  'add':
        if  (isset($this->objects[$this->currentContents]['onPage'])) {
          $this->o_page($this->objects[$this->currentContents]['onPage'], 'content', $id);
        }
        break;
      case  'even':
        $this->addLooseObjects[$id] =  'even';
        $pageObjectId =  $this->objects[$this->currentContents]['onPage'];
        if  ($this->objects[$pageObjectId]['info']['pageNum']%2 ==  0) {
          $this->addObject($id);
        }
        break;
      case  'odd':
        $this->addLooseObjects[$id] =  'odd';
        $pageObjectId =  $this->objects[$this->currentContents]['onPage'];
        if  ($this->objects[$pageObjectId]['info']['pageNum']%2 ==  1) {
          $this->addObject($id);
        }
        break;
      case  'next':
        $this->addLooseObjects[$id] =  'all';
        break;
      case  'nexteven':
        $this->addLooseObjects[$id] =  'even';
        break;
      case  'nextodd':
        $this->addLooseObjects[$id] =  'odd';
        break;
      }
    }
  }
  function serializeObject($id) {
    if  ( array_key_exists($id,  $this->objects))
      return  var_export($this->objects[$id],  true);
  }
  function restoreSerializedObject($obj) {
    $obj_id =  $this->openObject();
    eval('$this->objects[$obj_id] = ' . $obj . ';');
    $this->closeObject();
    return  $obj_id;
  }
  function addInfo($label, $value =  0) {
    if  (is_array($label)) {
      foreach ($label as  $l => $v) {
        $this->o_info($this->infoObject, $l, $v);
      }
    } else {
      $this->o_info($this->infoObject, $label, $value);
    }
  }
  function setPreferences($label, $value =  0) {
    if  (is_array($label)) {
      foreach ($label as  $l => $v) {
        $this->o_catalog($this->catalogId, 'viewerPreferences', array($l => $v));
      }
    } else {
      $this->o_catalog($this->catalogId, 'viewerPreferences', array($label => $value));
    }
  }
  function PRVT_getBytes(&$data, $pos, $num) {
    $ret =  0;
    for  ($i =  0;$i<$num;$i++) {
      $ret =  $ret*256;
      $ret+=  ord($data[$pos+$i]);
    }
    return  $ret;
  }
  function addImagePng($file, $x, $y, $w =  0, $h =  0, &$img, $is_mask = false, $mask = null) {
    if ( isset($this->imagelist[$file]) ) {
      $data = null;
    } else {
      imagesavealpha($img, false);
      $error =  0;
      if (DEBUGPNG) print '[addImagePng '.$file.']';
      ob_start();
      @imagepng($img);
      $data = ob_get_clean();
      if ($data == '') {
        $error = 1;
        $errormsg = 'trouble writing file from GD';
        if (DEBUGPNG) print 'trouble writing file from GD';
      }
      if  ($error) {
        $this->addMessage('PNG error - ('.$file.') '.$errormsg);
        return;
      }
    }
    $this->addPngFromBuf($file, $x, $y, $w, $h, $data, $is_mask, $mask);
  }
  protected function addImagePngAlpha($file, $x, $y, $w, $h, $byte) {
    $img = imagecreatefrompng($file);
    if ($img === false) {
      return;
    }
    $wpx = imagesx($img);
    $hpx = imagesy($img);
    imagesavealpha($img, false);
    $imgalpha = imagecreate($wpx, $hpx);
    imagesavealpha($imgalpha, false);
    for ($c = 0; $c < 256; ++$c) {
      imagecolorallocate($imgalpha, $c, $c, $c);
    }
 
    $eight_bit = ($byte & 4) !== 4;
    $allocated_colors = array();
    for ($xpx = 0; $xpx < $wpx; ++$xpx) {
      for ($ypx = 0; $ypx < $hpx; ++$ypx) {
        $color = imagecolorat($img, $xpx, $ypx);
        $col = imagecolorsforindex($img, $color);
        $alpha = $col['alpha'];
        if ($eight_bit) {
          $gammacorr = 2.2;
          $pixel = pow((((127 - $alpha) * 255 / 127) / 255), $gammacorr) * 255;
        }
        else {
          $pixel = (127 - $alpha) * 2;
          $key = implode("-", array($col['red'], $col['green'], $col['blue']));
          if (!isset($allocated_colors[$key])) {
            $pixel_img = imagecolorallocate($img, $col['red'], $col['green'], $col['blue']);
            $allocated_colors[$key] = $pixel_img;
          }
          else {
            $pixel_img = $allocated_colors[$key]; 
          }
          imagesetpixel($img, $xpx, $ypx, $pixel_img);
        }
        imagesetpixel($imgalpha, $xpx, $ypx, $pixel);
      }
    }
    $tempfile_alpha = tempnam($this->tmp, "cpdf_img_").'.png';
    imagepng($imgalpha, $tempfile_alpha);
    $imgplain = imagecreatetruecolor($wpx, $hpx);
    imagecopy($imgplain, $img, 0, 0, 0, 0, $wpx, $hpx);
    imagedestroy($img);
    $tempfile_plain = tempnam($this->tmp, "cpdf_img_").'.png';
    imagepng($imgplain, $tempfile_plain);
    $this->addImagePng($tempfile_alpha, $x, $y, $w, $h, $imgalpha, true);
    imagedestroy($imgalpha);
    $this->addImagePng($tempfile_plain, $x, $y, $w, $h, $imgplain, false, true);
    imagedestroy($imgplain);
    unlink($tempfile_alpha);
    unlink($tempfile_plain);
  }
  function addPngFromFile($file, $x, $y, $w =  0, $h =  0) {
    if ( isset($this->imagelist[$file]) ) {
      $img = null;
    } 
    else {
      $byte = ord (file_get_contents ($file, false, null, 25, 1));
      $is_alpha = ($byte & 6); 
      if ($is_alpha) { 
        return $this->addImagePngAlpha($file, $x, $y, $w, $h, $byte);
      }
      $imgtmp = @imagecreatefrompng($file);
      if (!$imgtmp) {
        return;
      }
      $sx = imagesx($imgtmp);
      $sy = imagesy($imgtmp);
      $img = imagecreatetruecolor($sx,$sy);
      imagealphablending($img, true);
      $ti = imagecolortransparent($imgtmp);
      if ($ti >= 0) {
        $tc = imagecolorsforindex($imgtmp,$ti);
        $ti = imagecolorallocate($img,$tc['red'],$tc['green'],$tc['blue']);
        imagefill($img,0,0,$ti);
        imagecolortransparent($img, $ti);
      } else {
        imagefill($img,1,1,imagecolorallocate($img,255,255,255));
      }
      imagecopy($img,$imgtmp,0,0,0,0,$sx,$sy);
      imagedestroy($imgtmp);
    }
    $this->addImagePng($file, $x, $y, $w, $h, $img);
    imagedestroy($img);
  }
  function addPngFromBuf($file, $x, $y, $w =  0, $h =  0, &$data, $is_mask = false, $mask = null) {
    if ( isset($this->imagelist[$file]) ) {
      $data = null;
      $info['width'] = $this->imagelist[$file]['w'];
      $info['height'] = $this->imagelist[$file]['h'];
      $label = $this->imagelist[$file]['label'];
    }
    else {
      if ($data == null) {
        $this->addMessage('addPngFromBuf error - ('.$imgname.') data not present!');
        return;
      }
    $error =  0;
    if  (!$error) {
      $header =  chr(137) .chr(80) .chr(78) .chr(71) .chr(13) .chr(10) .chr(26) .chr(10);
      if  (mb_substr($data, 0, 8, '8bit') !=  $header) {
        $error =  1;
        if (DEBUGPNG) print '[addPngFromFile this file does not have a valid header '.$file.']';
        $errormsg =  'this file does not have a valid header';
      }
    }
    if  (!$error) {
      $p =  8;
      $len =  mb_strlen($data, '8bit');
      $haveHeader =  0;
      $info =  array();
      $idata =  '';
      $pdata =  '';
      while  ($p < $len) {
        $chunkLen =  $this->PRVT_getBytes($data, $p, 4);
        $chunkType =  mb_substr($data, $p+4, 4, '8bit');
        switch ($chunkType) {
        case  'IHDR':
          $info['width'] =  $this->PRVT_getBytes($data, $p+8, 4);
          $info['height'] =  $this->PRVT_getBytes($data, $p+12, 4);
          $info['bitDepth'] =  ord($data[$p+16]);
          $info['colorType'] =  ord($data[$p+17]);
          $info['compressionMethod'] =  ord($data[$p+18]);
          $info['filterMethod'] =  ord($data[$p+19]);
          $info['interlaceMethod'] =  ord($data[$p+20]);
          $haveHeader =  1;
          if  ($info['compressionMethod'] !=  0) {
            $error =  1;
            if (DEBUGPNG) print '[addPngFromFile unsupported compression method '.$file.']';
            $errormsg =  'unsupported compression method';
          }
          if  ($info['filterMethod'] !=  0) {
            $error =  1;
            if (DEBUGPNG) print '[addPngFromFile unsupported filter method '.$file.']';
            $errormsg =  'unsupported filter method';
          }
          break;
        case  'PLTE':
          $pdata.=  mb_substr($data, $p+8, $chunkLen, '8bit');
          break;
        case  'IDAT':
          $idata.=  mb_substr($data, $p+8, $chunkLen, '8bit');
          break;
        case  'tRNS':
          $transparency =  array();
          if  ($info['colorType'] ==  3) {
            $transparency['type'] =  'indexed';
            $numPalette =  mb_strlen($pdata, '8bit')/3;
            $trans =  0;
            for  ($i =  $chunkLen;$i >=  0;$i--) {
              if  (ord($data[$p+8+$i]) ==  0) {
                $trans =  $i;
              }
            }
            $transparency['data'] =  $trans;
          } elseif ($info['colorType'] ==  0) {
            $transparency['type'] =  'indexed';
            $transparency['data'] =  ord($data[$p+8+1]);
          } elseif ($info['colorType'] ==  2) {
            $transparency['r'] =  $this->PRVT_getBytes($data, $p+8, 2);
            $transparency['g'] =  $this->PRVT_getBytes($data, $p+10, 2);
            $transparency['b'] =  $this->PRVT_getBytes($data, $p+12, 2);
            $transparency['type'] = 'color-key';
          } else {
            if (DEBUGPNG) print '[addPngFromFile unsupported transparency type '.$file.']';
          }
          break;
        default:
          break;
        }
        $p+=  $chunkLen+12;
      }
      if (!$haveHeader) {
        $error =  1;
        if (DEBUGPNG) print '[addPngFromFile information header is missing '.$file.']';
        $errormsg =  'information header is missing';
      }
      if  (isset($info['interlaceMethod']) &&  $info['interlaceMethod']) {
        $error =  1;
        if (DEBUGPNG) print '[addPngFromFile no support for interlaced images in pdf '.$file.']';
        $errormsg =  'There appears to be no support for interlaced images in pdf.';
      }
    }
    if  (!$error &&  $info['bitDepth'] > 8) {
      $error =  1;
      if (DEBUGPNG) print '[addPngFromFile bit depth of 8 or less is supported '.$file.']';
      $errormsg =  'only bit depth of 8 or less is supported';
    }
    if  (!$error) {
      switch  ($info['colorType']) {
      case  3:
        $color =  'DeviceRGB';
        $ncolor =  1;
        break;
      case  2:
        $color =  'DeviceRGB';
        $ncolor =  3;
        break;
      case  0:
        $color =  'DeviceGray';
        $ncolor =  1;
        break;
      default: 
        $error =  1;
        if (DEBUGPNG) print '[addPngFromFile alpha channel not supported: '.$info['colorType'].' '.$file.']';
        $errormsg =  'transparancey alpha channel not supported, transparency only supported for palette images.';
      }
    }
    if  ($error) {
      $this->addMessage('PNG error - ('.$file.') '.$errormsg);
      return;
    }
      $this->numImages++;
      $im =  $this->numImages;
      $label =  'I'.$im;
      $this->numObj++;
      $options =  array(
        'label' => $label,
        'data' => $idata,
        'bitsPerComponent' => $info['bitDepth'],
        'pdata' => $pdata,
        'iw' => $info['width'],
        'ih' => $info['height'],
        'type' => 'png',
        'color' => $color,
        'ncolor' => $ncolor,
        'masked' => $mask,
        'isMask' => $is_mask,
      );
      if  (isset($transparency)) {
        $options['transparency'] =  $transparency;
      }
      $this->o_image($this->numObj, 'new', $options);
      $this->imagelist[$file] = array('label' =>$label, 'w' => $info['width'], 'h' => $info['height']);
    }
    if ($is_mask) {
      return;
    }
    if  ($w <=  0 && $h <=  0) {
      $w =  $info['width'];
      $h =  $info['height'];
    }
    if  ($w <=  0) {
      $w =  $h/$info['height']*$info['width'];
    }
    if  ($h <=  0) {
      $h =  $w*$info['height']/$info['width'];
    }
    $this->objects[$this->currentContents]['c'].=  sprintf("\nq\n%.3F 0 0 %.3F %.3F %.3F cm", $w, $h, $x, $y);
    $this->objects[$this->currentContents]['c'].=  "\n/$label Do\nQ";
  }
  function addJpegFromFile($img, $x, $y, $w =  0, $h =  0) {
    if  (!file_exists($img)) {
      return;
    }
  if ( isset($this->imagelist[$img]) ) {
    $data = null;
      $imageWidth  = $this->imagelist[$img]['w'];
      $imageHeight = $this->imagelist[$img]['h'];
      $channels    = $this->imagelist[$img]['c'];
  } else {
      $tmp = getimagesize($img);
      $imageWidth  = $tmp[0];
      $imageHeight = $tmp[1];
      if  (isset($tmp['channels'])) {
        $channels =  $tmp['channels'];
      } else {
        $channels =  3;
      }
      $data =  file_get_contents($img);
    }
    if  ($w <=  0 &&  $h <=  0) {
      $w =  $imageWidth;
    }
    if  ($w ==  0) {
      $w =  $h/$imageHeight*$imageWidth;
    }
    if  ($h ==  0) {
      $h =  $w*$imageHeight/$imageWidth;
    }
    $this->addJpegImage_common($data, $x, $y, $w, $h, $imageWidth, $imageHeight, $channels, $img);
  }
  function addImage(&$img, $x, $y, $w =  0, $h =  0, $quality =  75) {
    $imgname = tempnam($this->tmp, "cpdf_img_").'.jpeg';
    if  ($quality>75) {
      $quality =  75;
    }
    $imageWidth =  imagesx($img);
    $imageHeight =  imagesy($img);
    if  ($w <=  0 &&  $h <=  0) {
      return;
    }
    if  ($w ==  0) {
      $w =  $h/$imageHeight*$imageWidth;
    }
    if  ($h ==  0) {
      $h =  $w*$imageHeight/$imageWidth;
    }
    ob_start();
    imagejpeg($img, '', $quality);
    $data = ob_get_clean();
    $this->addJpegImage_common($data, $x, $y, $w, $h, $imageWidth, $imageHeight, $imgname);
  }
  function image_iscached($imgname) {
    return isset($this->imagelist[$imgname]);
  }
  function addJpegImage_common(&$data, $x, $y, $w =  0, $h =  0, $imageWidth, $imageHeight, $channels =  3, $imgname) {
    if ( isset($this->imagelist[$imgname]) ) {
      $label = $this->imagelist[$imgname]['label'];
    } else {
      if ($data == null) {
        $this->addMessage('addJpegImage_common error - ('.$imgname.') data not present!');
        return;
      }
      $this->numImages++;
      $im =  $this->numImages;
      $label =  'I'.$im;
      $this->numObj++;
      $this->o_image($this->numObj, 'new', array(
        'label' => $label, 
        'data' => &$data, 
        'iw' => $imageWidth, 
        'ih' => $imageHeight, 
        'channels' => $channels
      ));
      $this->imagelist[$imgname] = array('label' =>$label, 'w' => $imageWidth, 'h' => $imageHeight, 'c'=> $channels );
    }
    $this->objects[$this->currentContents]['c'].=  sprintf("\nq\n%.3F 0 0 %.3F %.3F %.3F cm", $w, $h, $x, $y);
    $this->objects[$this->currentContents]['c'].=  "\n/$label Do\nQ";
  }
  function openHere($style, $a =  0, $b =  0, $c =  0) {
    $this->numObj++;
    $this->o_destination($this->numObj, 'new', array('page' => $this->currentPage, 'type' => $style, 'p1' => $a, 'p2' => $b, 'p3' => $c));
    $id =  $this->catalogId;
    $this->o_catalog($id, 'openHere', $this->numObj);
  }
  function addJavascript($code) {
    $this->javascript .= $code;
  }
  function addDestination($label, $style, $a =  0, $b =  0, $c =  0) {
    $this->numObj++;
    $this->o_destination($this->numObj, 'new', array('page' => $this->currentPage, 'type' => $style, 'p1' => $a, 'p2' => $b, 'p3' => $c));
    $id =  $this->numObj;
    $this->destinations["$label"] =  $id;
  }
  function setFontFamily($family, $options =  '') {
    if  (!is_array($options)) {
      if  ($family ===  'init') {
        $this->fontFamilies['Helvetica.afm'] =
          array('b' => 'Helvetica-Bold.afm',
                'i' => 'Helvetica-Oblique.afm',
                'bi' => 'Helvetica-BoldOblique.afm',
                'ib' => 'Helvetica-BoldOblique.afm');
        $this->fontFamilies['Courier.afm'] =
          array('b' => 'Courier-Bold.afm',
                'i' => 'Courier-Oblique.afm',
                'bi' => 'Courier-BoldOblique.afm',
                'ib' => 'Courier-BoldOblique.afm');
        $this->fontFamilies['Times-Roman.afm'] =
          array('b' => 'Times-Bold.afm',
                'i' => 'Times-Italic.afm',
                'bi' => 'Times-BoldItalic.afm',
                'ib' => 'Times-BoldItalic.afm');
      }
    } else {
      if  (mb_strlen($family)) {
        $this->fontFamilies[$family] =  $options;
      }
    }
  }
  function addMessage($message) {
    $this->messages.=  $message."\n";
  }
  function transaction($action) {
    switch  ($action) {
    case 'start':
      $data =  get_object_vars($this);
      $this->checkpoint =  $data;
      unset($data);
      break;
    case 'commit':
      if  (is_array($this->checkpoint) &&  isset($this->checkpoint['checkpoint'])) {
        $tmp =  $this->checkpoint['checkpoint'];
        $this->checkpoint =  $tmp;
        unset($tmp);
      } else {
        $this->checkpoint =  '';
      }
      break;
    case 'rewind':
      if  (is_array($this->checkpoint)) {
        $tmp =  $this->checkpoint;
        foreach ($tmp as  $k => $v) {
          if  ($k !==  'checkpoint') {
            $this->$k =  $v;
          }
        }
        unset($tmp);
      }
      break;
    case 'abort':
      if  (is_array($this->checkpoint)) {
        $tmp =  $this->checkpoint;
        foreach ($tmp as  $k => $v) {
          $this->$k =  $v;
        }
        unset($tmp);
      }
      break;
    }
  }
}
