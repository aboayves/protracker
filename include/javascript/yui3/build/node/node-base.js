/*
 Copyright (c) 2010, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.com/yui/license.html
 version: 3.3.0
 build: 3167
 */
YUI.add('node-base',function(Y){var DOT='.',NODE_NAME='nodeName',NODE_TYPE='nodeType',OWNER_DOCUMENT='ownerDocument',TAG_NAME='tagName',UID='_yuid',_slice=Array.prototype.slice,Y_DOM=Y.DOM,Y_Node=function(node){var uid=(node.nodeType!==9)?node.uniqueID:node[UID];if(uid&&Y_Node._instances[uid]&&Y_Node._instances[uid]._node!==node){node[UID]=null;}
uid=uid||Y.stamp(node);if(!uid){uid=Y.guid();}
this[UID]=uid;this._node=node;Y_Node._instances[uid]=this;this._stateProxy=node;Y.EventTarget.call(this,{emitFacade:true});if(this._initPlugins){this._initPlugins();}
this.SHOW_TRANSITION=Y_Node.SHOW_TRANSITION;this.HIDE_TRANSITION=Y_Node.HIDE_TRANSITION;},_wrapFn=function(fn){var ret=null;if(fn){ret=(typeof fn=='string')?function(n){return Y.Selector.test(n,fn);}:function(n){return fn(Y.one(n));};}
return ret;};Y_Node.NAME='node';Y_Node.re_aria=/^(?:role$|aria-)/;Y_Node.SHOW_TRANSITION='fadeIn';Y_Node.HIDE_TRANSITION='fadeOut';Y_Node.DOM_EVENTS={abort:1,beforeunload:1,blur:1,change:1,click:1,close:1,command:1,contextmenu:1,dblclick:1,DOMMouseScroll:1,drag:1,dragstart:1,dragenter:1,dragover:1,dragleave:1,dragend:1,drop:1,error:1,focus:1,key:1,keydown:1,keypress:1,keyup:1,load:1,message:1,mousedown:1,mouseenter:1,mouseleave:1,mousemove:1,mousemultiwheel:1,mouseout:1,mouseover:1,mouseup:1,mousewheel:1,orientationchange:1,reset:1,resize:1,select:1,selectstart:1,submit:1,scroll:1,textInput:1,unload:1};Y.mix(Y_Node.DOM_EVENTS,Y.Env.evt.plugins);Y_Node._instances={};Y_Node.getDOMNode=function(node){if(node){return(node.nodeType)?node:node._node||null;}
return null;};Y_Node.scrubVal=function(val,node){if(val){if(typeof val=='object'||typeof val=='function'){if(NODE_TYPE in val||Y_DOM.isWindow(val)){val=Y.one(val);}else if((val.item&&!val._nodes)||(val[0]&&val[0][NODE_TYPE])){val=Y.all(val);}}}else if(typeof val==='undefined'){val=node;}else if(val===null){val=null;}
return val;};Y_Node.addMethod=function(name,fn,context){if(name&&fn&&typeof fn=='function'){Y_Node.prototype[name]=function(){var args=_slice.call(arguments),node=this,ret;if(args[0]&&Y.instanceOf(args[0],Y_Node)){args[0]=args[0]._node;}
if(args[1]&&Y.instanceOf(args[1],Y_Node)){args[1]=args[1]._node;}
args.unshift(node._node);ret=fn.apply(node,args);if(ret){ret=Y_Node.scrubVal(ret,node);}
(typeof ret!='undefined')||(ret=node);return ret;};}else{}};Y_Node.importMethod=function(host,name,altName){if(typeof name=='string'){altName=altName||name;Y_Node.addMethod(altName,host[name],host);}else{Y.Array.each(name,function(n){Y_Node.importMethod(host,n);});}};Y_Node.one=function(node){var instance=null,cachedNode,uid;if(node){if(typeof node=='string'){if(node.indexOf('doc')===0){node=Y.config.doc;}else if(node.indexOf('win')===0){node=Y.config.win;}else{node=Y.Selector.query(node,null,true);}
if(!node){return null;}}else if(Y.instanceOf(node,Y_Node)){return node;}
if(node.nodeType||Y.DOM.isWindow(node)){uid=(node.uniqueID&&node.nodeType!==9)?node.uniqueID:node._yuid;instance=Y_Node._instances[uid];cachedNode=instance?instance._node:null;if(!instance||(cachedNode&&node!==cachedNode)){instance=new Y_Node(node);}}}
return instance;};Y_Node.create=function(html,doc){if(doc&&doc._node){doc=doc._node;}
return Y.one(Y_DOM.create(html,doc));};Y_Node.ATTRS={text:{getter:function(){return Y_DOM.getText(this._node);},setter:function(content){Y_DOM.setText(this._node,content);return content;}},'options':{getter:function(){return this._node.getElementsByTagName('option');}},'children':{getter:function(){var node=this._node,children=node.children,childNodes,i,len;if(!children){childNodes=node.childNodes;children=[];for(i=0,len=childNodes.length;i<len;++i){if(childNodes[i][TAG_NAME]){children[children.length]=childNodes[i];}}}
return Y.all(children);}},value:{getter:function(){return Y_DOM.getValue(this._node);},setter:function(val){Y_DOM.setValue(this._node,val);return val;}}};Y_Node.DEFAULT_SETTER=function(name,val){var node=this._stateProxy,strPath;if(name.indexOf(DOT)>-1){strPath=name;name=name.split(DOT);Y.Object.setValue(node,name,val);}else if(typeof node[name]!='undefined'){node[name]=val;}
return val;};Y_Node.DEFAULT_GETTER=function(name){var node=this._stateProxy,val;if(name.indexOf&&name.indexOf(DOT)>-1){val=Y.Object.getValue(node,name.split(DOT));}else if(typeof node[name]!='undefined'){val=node[name];}
return val;};Y.mix(Y_Node,Y.EventTarget,false,null,1);Y.mix(Y_Node.prototype,{toString:function(){var str=this[UID]+': not bound to a node',node=this._node,attrs,id,className;if(node){attrs=node.attributes;id=(attrs&&attrs.id)?node.getAttribute('id'):null;className=(attrs&&attrs.className)?node.getAttribute('className'):null;str=node[NODE_NAME];if(id){str+='#'+id;}
if(className){str+='.'+className.replace(' ','.');}
str+=' '+this[UID];}
return str;},get:function(attr){var val;if(this._getAttr){val=this._getAttr(attr);}else{val=this._get(attr);}
if(val){val=Y_Node.scrubVal(val,this);}else if(val===null){val=null;}
return val;},_get:function(attr){var attrConfig=Y_Node.ATTRS[attr],val;if(attrConfig&&attrConfig.getter){val=attrConfig.getter.call(this);}else if(Y_Node.re_aria.test(attr)){val=this._node.getAttribute(attr,2);}else{val=Y_Node.DEFAULT_GETTER.apply(this,arguments);}
return val;},set:function(attr,val){var attrConfig=Y_Node.ATTRS[attr];if(this._setAttr){this._setAttr.apply(this,arguments);}else{if(attrConfig&&attrConfig.setter){attrConfig.setter.call(this,val,attr);}else if(Y_Node.re_aria.test(attr)){this._node.setAttribute(attr,val);}else{Y_Node.DEFAULT_SETTER.apply(this,arguments);}}
return this;},setAttrs:function(attrMap){if(this._setAttrs){this._setAttrs(attrMap);}else{Y.Object.each(attrMap,function(v,n){this.set(n,v);},this);}
return this;},getAttrs:function(attrs){var ret={};if(this._getAttrs){this._getAttrs(attrs);}else{Y.Array.each(attrs,function(v,n){ret[v]=this.get(v);},this);}
return ret;},create:Y_Node.create,compareTo:function(refNode){var node=this._node;if(Y.instanceOf(refNode,Y_Node)){refNode=refNode._node;}
return node===refNode;},inDoc:function(doc){var node=this._node;doc=(doc)?doc._node||doc:node[OWNER_DOCUMENT];if(doc.documentElement){return Y_DOM.contains(doc.documentElement,node);}},getById:function(id){var node=this._node,ret=Y_DOM.byId(id,node[OWNER_DOCUMENT]);if(ret&&Y_DOM.contains(node,ret)){ret=Y.one(ret);}else{ret=null;}
return ret;},ancestor:function(fn,testSelf){return Y.one(Y_DOM.ancestor(this._node,_wrapFn(fn),testSelf));},ancestors:function(fn,testSelf){return Y.all(Y_DOM.ancestors(this._node,_wrapFn(fn),testSelf));},previous:function(fn,all){return Y.one(Y_DOM.elementByAxis(this._node,'previousSibling',_wrapFn(fn),all));},next:function(fn,all){return Y.one(Y_DOM.elementByAxis(this._node,'nextSibling',_wrapFn(fn),all));},siblings:function(fn){return Y.all(Y_DOM.siblings(this._node,_wrapFn(fn)));},one:function(selector){return Y.one(Y.Selector.query(selector,this._node,true));},all:function(selector){var nodelist=Y.all(Y.Selector.query(selector,this._node));nodelist._query=selector;nodelist._queryRoot=this._node;return nodelist;},test:function(selector){return Y.Selector.test(this._node,selector);},remove:function(destroy){var node=this._node,parentNode=node.parentNode;if(parentNode){parentNode.removeChild(node);}
if(destroy){this.destroy();}
return this;},replace:function(newNode){var node=this._node;if(typeof newNode=='string'){newNode=Y_Node.create(newNode);}
node.parentNode.replaceChild(Y_Node.getDOMNode(newNode),node);return this;},replaceChild:function(node,refNode){if(typeof node=='string'){node=Y_DOM.create(node);}
return Y.one(this._node.replaceChild(Y_Node.getDOMNode(node),Y_Node.getDOMNode(refNode)));},appendChild:function(node){return Y_Node.scrubVal(this._insert(node));},insertBefore:function(newNode,refNode){return Y.Node.scrubVal(this._insert(newNode,refNode));},purge:function(recurse,type){Y.Event.purgeElement(this._node,recurse,type);return this;},destroy:function(recursive){this.purge();if(this.unplug){this.unplug();}
this.clearData();if(recursive){this.all('*').destroy();}
this._node=null;this._stateProxy=null;delete Y_Node._instances[this[UID]];},invoke:function(method,a,b,c,d,e){var node=this._node,ret;if(a&&Y.instanceOf(a,Y_Node)){a=a._node;}
if(b&&Y.instanceOf(b,Y_Node)){b=b._node;}
ret=node[method](a,b,c,d,e);return Y_Node.scrubVal(ret,this);},insert:function(content,where){this._insert(content,where);return this;},_insert:function(content,where){var node=this._node,ret=null;if(typeof where=='number'){where=this._node.childNodes[where];}else if(where&&where._node){where=where._node;}
if(content&&typeof content!='string'){content=content._node||content._nodes||content;}
ret=Y_DOM.addHTML(node,content,where);return ret;},prepend:function(content){return this.insert(content,0);},append:function(content){return this.insert(content,null);},appendTo:function(node){Y.one(node).append(this);return this;},setContent:function(content){this._insert(content,'replace');return this;},getContent:function(content){return this.get('innerHTML');},swap:Y.config.doc.documentElement.swapNode?function(otherNode){this._node.swapNode(Y_Node.getDOMNode(otherNode));}:function(otherNode){otherNode=Y_Node.getDOMNode(otherNode);var node=this._node,parent=otherNode.parentNode,nextSibling=otherNode.nextSibling;if(nextSibling===node){parent.insertBefore(node,otherNode);}else if(otherNode===node.nextSibling){parent.insertBefore(otherNode,node);}else{node.parentNode.replaceChild(otherNode,node);Y_DOM.addHTML(parent,node,nextSibling);}
return this;},getData:function(name){var ret;this._data=this._data||{};if(arguments.length){ret=this._data[name];}else{ret=this._data;}
return ret;},setData:function(name,val){this._data=this._data||{};if(arguments.length>1){this._data[name]=val;}else{this._data=name;}
return this;},clearData:function(name){if('_data'in this){if(name){delete this._data[name];}else{delete this._data;}}
return this;},hasMethod:function(method){var node=this._node;return!!(node&&method in node&&typeof node[method]!='unknown'&&(typeof node[method]=='function'||String(node[method]).indexOf('function')===1));},SHOW_TRANSITION:null,HIDE_TRANSITION:null,show:function(callback){callback=arguments[arguments.length-1];this.toggleView(true,callback);return this;},_show:function(){this.setStyle('display','');},_isHidden:function(){return Y.DOM.getStyle(this._node,'display')==='none';},toggleView:function(on,callback){this._toggleView.apply(this,arguments);},_toggleView:function(on,callback){callback=arguments[arguments.length-1];if(typeof on!='boolean'){on=(this._isHidden())?1:0;}
if(on){this._show();}else{this._hide();}
if(typeof callback=='function'){callback.call(this);}
return this;},hide:function(callback){callback=arguments[arguments.length-1];this.toggleView(false,callback);return this;},_hide:function(){this.setStyle('display','none');},isFragment:function(){return(this.get('nodeType')===11);},empty:function(destroy){this.get('childNodes').remove(destroy);return this;}},true);Y.Node=Y_Node;Y.one=Y.Node.one;var NodeList=function(nodes){var tmp=[];if(typeof nodes==='string'){this._query=nodes;nodes=Y.Selector.query(nodes);}else if(nodes.nodeType||Y_DOM.isWindow(nodes)){nodes=[nodes];}else if(Y.instanceOf(nodes,Y.Node)){nodes=[nodes._node];}else if(Y.instanceOf(nodes[0],Y.Node)){Y.Array.each(nodes,function(node){if(node._node){tmp.push(node._node);}});nodes=tmp;}else{nodes=Y.Array(nodes,0,true);}
this._nodes=nodes;};NodeList.NAME='NodeList';NodeList.getDOMNodes=function(nodelist){return(nodelist&&nodelist._nodes)?nodelist._nodes:nodelist;};NodeList.each=function(instance,fn,context){var nodes=instance._nodes;if(nodes&&nodes.length){Y.Array.each(nodes,fn,context||instance);}else{}};NodeList.addMethod=function(name,fn,context){if(name&&fn){NodeList.prototype[name]=function(){var ret=[],args=arguments;Y.Array.each(this._nodes,function(node){var UID=(node.uniqueID&&node.nodeType!==9)?'uniqueID':'_yuid',instance=Y.Node._instances[node[UID]],ctx,result;if(!instance){instance=NodeList._getTempNode(node);}
ctx=context||instance;result=fn.apply(ctx,args);if(result!==undefined&&result!==instance){ret[ret.length]=result;}});return ret.length?ret:this;};}else{}};NodeList.importMethod=function(host,name,altName){if(typeof name==='string'){altName=altName||name;NodeList.addMethod(name,host[name]);}else{Y.Array.each(name,function(n){NodeList.importMethod(host,n);});}};NodeList._getTempNode=function(node){var tmp=NodeList._tempNode;if(!tmp){tmp=Y.Node.create('<div></div>');NodeList._tempNode=tmp;}
tmp._node=node;tmp._stateProxy=node;return tmp;};Y.mix(NodeList.prototype,{item:function(index){return Y.one((this._nodes||[])[index]);},each:function(fn,context){var instance=this;Y.Array.each(this._nodes,function(node,index){node=Y.one(node);return fn.call(context||node,node,index,instance);});return instance;},batch:function(fn,context){var nodelist=this;Y.Array.each(this._nodes,function(node,index){var instance=Y.Node._instances[node[UID]];if(!instance){instance=NodeList._getTempNode(node);}
return fn.call(context||instance,instance,index,nodelist);});return nodelist;},some:function(fn,context){var instance=this;return Y.Array.some(this._nodes,function(node,index){node=Y.one(node);context=context||node;return fn.call(context,node,index,instance);});},toFrag:function(){return Y.one(Y.DOM._nl2frag(this._nodes));},indexOf:function(node){return Y.Array.indexOf(this._nodes,Y.Node.getDOMNode(node));},filter:function(selector){return Y.all(Y.Selector.filter(this._nodes,selector));},modulus:function(n,r){r=r||0;var nodes=[];NodeList.each(this,function(node,i){if(i%n===r){nodes.push(node);}});return Y.all(nodes);},odd:function(){return this.modulus(2,1);},even:function(){return this.modulus(2);},destructor:function(){},refresh:function(){var doc,nodes=this._nodes,query=this._query,root=this._queryRoot;if(query){if(!root){if(nodes&&nodes[0]&&nodes[0].ownerDocument){root=nodes[0].ownerDocument;}}
this._nodes=Y.Selector.query(query,root);}
return this;},_prepEvtArgs:function(type,fn,context){var args=Y.Array(arguments,0,true);if(args.length<2){args[2]=this._nodes;}else{args.splice(2,0,this._nodes);}
args[3]=context||this;return args;},on:function(type,fn,context){return Y.on.apply(Y,this._prepEvtArgs.apply(this,arguments));},once:function(type,fn,context){return Y.once.apply(Y,this._prepEvtArgs.apply(this,arguments));},after:function(type,fn,context){return Y.after.apply(Y,this._prepEvtArgs.apply(this,arguments));},size:function(){return this._nodes.length;},isEmpty:function(){return this._nodes.length<1;},toString:function(){var str='',errorMsg=this[UID]+': not bound to any nodes',nodes=this._nodes,node;if(nodes&&nodes[0]){node=nodes[0];str+=node[NODE_NAME];if(node.id){str+='#'+node.id;}
if(node.className){str+='.'+node.className.replace(' ','.');}
if(nodes.length>1){str+='...['+nodes.length+' items]';}}
return str||errorMsg;}},true);NodeList.importMethod(Y.Node.prototype,['append','destroy','detach','detachAll','empty','insert','prepend','remove','set','setContent','show','hide','toggleView']);NodeList.prototype.get=function(attr){var ret=[],nodes=this._nodes,isNodeList=false,getTemp=NodeList._getTempNode,instance,val;if(nodes[0]){instance=Y.Node._instances[nodes[0]._yuid]||getTemp(nodes[0]);val=instance._get(attr);if(val&&val.nodeType){isNodeList=true;}}
Y.Array.each(nodes,function(node){instance=Y.Node._instances[node._yuid];if(!instance){instance=getTemp(node);}
val=instance._get(attr);if(!isNodeList){val=Y.Node.scrubVal(val,instance);}
ret.push(val);});return(isNodeList)?Y.all(ret):ret;};Y.NodeList=NodeList;Y.all=function(nodes){return new NodeList(nodes);};Y.Node.all=Y.all;Y.Array.each(['removeChild','hasChildNodes','cloneNode','hasAttribute','removeAttribute','scrollIntoView','getElementsByTagName','focus','blur','submit','reset','select','createCaption'],function(method){Y.Node.prototype[method]=function(arg1,arg2,arg3){var ret=this.invoke(method,arg1,arg2,arg3);return ret;};});Y.Node.importMethod(Y.DOM,['contains','setAttribute','getAttribute','wrap','unwrap','generateID']);Y.NodeList.importMethod(Y.Node.prototype,['getAttribute','setAttribute','removeAttribute','unwrap','wrap','generateID']);(function(Y){var methods=['hasClass','addClass','removeClass','replaceClass','toggleClass'];Y.Node.importMethod(Y.DOM,methods);Y.NodeList.importMethod(Y.Node.prototype,methods);})(Y);if(!Y.config.doc.documentElement.hasAttribute){Y.Node.prototype.hasAttribute=function(attr){if(attr==='value'){if(this.get('value')!==""){return true;}}
return!!(this._node.attributes[attr]&&this._node.attributes[attr].specified);};}
Y.Node.prototype.focus=function(){try{this._node.focus();}catch(e){}};Y.Node.ATTRS.type={setter:function(val){if(val==='hidden'){try{this._node.type='hidden';}catch(e){this.setStyle('display','none');this._inputType='hidden';}}else{try{this._node.type=val;}catch(e){}}
return val;},getter:function(){return this._inputType||this._node.type;},_bypassProxy:true};if(Y.config.doc.createElement('form').elements.nodeType){Y.Node.ATTRS.elements={getter:function(){return this.all('input, textarea, button, select');}};}
Y.mix(Y.Node.ATTRS,{offsetHeight:{setter:function(h){Y.DOM.setHeight(this._node,h);return h;},getter:function(){return this._node.offsetHeight;}},offsetWidth:{setter:function(w){Y.DOM.setWidth(this._node,w);return w;},getter:function(){return this._node.offsetWidth;}}});Y.mix(Y.Node.prototype,{sizeTo:function(w,h){var node;if(arguments.length<2){node=Y.one(w);w=node.get('offsetWidth');h=node.get('offsetHeight');}
this.setAttrs({offsetWidth:w,offsetHeight:h});}});var Y_NodeList=Y.NodeList,ArrayProto=Array.prototype,ArrayMethods=['concat','pop','push','shift','slice','splice','unshift'];Y.Array.each(ArrayMethods,function(name){Y_NodeList.prototype[name]=function(){var args=[],i=0,arg;while((arg=arguments[i++])){args.push(arg._node||arg._nodes||arg);}
return Y.Node.scrubVal(ArrayProto[name].apply(this._nodes,args));};});},'3.3.0',{requires:['dom-base','selector-css2','event-base']});
