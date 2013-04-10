/*
 Copyright (c) 2010, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.com/yui/license.html
 version: 3.3.0
 build: 3167
 */
YUI.add('history-hash',function(Y){var HistoryBase=Y.HistoryBase,Lang=Y.Lang,YArray=Y.Array,YObject=Y.Object,GlobalEnv=YUI.namespace('Env.HistoryHash'),SRC_HASH='hash',hashNotifiers,oldHash,oldUrl,win=Y.config.win,location=win.location,useHistoryHTML5=Y.config.useHistoryHTML5;function HistoryHash(){HistoryHash.superclass.constructor.apply(this,arguments);}
Y.extend(HistoryHash,HistoryBase,{_init:function(config){var bookmarkedState=HistoryHash.parseHash();config=config||{};this._initialState=config.initialState?Y.merge(config.initialState,bookmarkedState):bookmarkedState;Y.after('hashchange',Y.bind(this._afterHashChange,this),win);HistoryHash.superclass._init.apply(this,arguments);},_change:function(src,state,options){YObject.each(state,function(value,key){if(Lang.isValue(value)){state[key]=value.toString();}});return HistoryHash.superclass._change.call(this,src,state,options);},_storeState:function(src,newState){var decode=HistoryHash.decode,newHash=HistoryHash.createHash(newState);HistoryHash.superclass._storeState.apply(this,arguments);if(src!==SRC_HASH&&decode(HistoryHash.getHash())!==decode(newHash)){HistoryHash[src===HistoryBase.SRC_REPLACE?'replaceHash':'setHash'](newHash);}},_afterHashChange:function(e){this._resolveChanges(SRC_HASH,HistoryHash.parseHash(e.newHash),{});}},{NAME:'historyHash',SRC_HASH:SRC_HASH,hashPrefix:'',_REGEX_HASH:/([^\?#&]+)=([^&]+)/g,createHash:function(params){var encode=HistoryHash.encode,hash=[];YObject.each(params,function(value,key){if(Lang.isValue(value)){hash.push(encode(key)+'='+encode(value));}});return hash.join('&');},decode:function(string){return decodeURIComponent(string.replace(/\+/g,' '));},encode:function(string){return encodeURIComponent(string).replace(/%20/g,'+');},getHash:(Y.UA.gecko?function(){var matches=/#(.*)$/.exec(location.href),hash=matches&&matches[1]||'',prefix=HistoryHash.hashPrefix;return prefix&&hash.indexOf(prefix)===0?hash.replace(prefix,''):hash;}:function(){var hash=location.hash.substr(1),prefix=HistoryHash.hashPrefix;return prefix&&hash.indexOf(prefix)===0?hash.replace(prefix,''):hash;}),getUrl:function(){return location.href;},parseHash:function(hash){var decode=HistoryHash.decode,i,len,matches,param,params={},prefix=HistoryHash.hashPrefix,prefixIndex;hash=Lang.isValue(hash)?hash:HistoryHash.getHash();if(prefix){prefixIndex=hash.indexOf(prefix);if(prefixIndex===0||(prefixIndex===1&&hash.charAt(0)==='#')){hash=hash.replace(prefix,'');}}
matches=hash.match(HistoryHash._REGEX_HASH)||[];for(i=0,len=matches.length;i<len;++i){param=matches[i].split('=');params[decode(param[0])]=decode(param[1]);}
return params;},replaceHash:function(hash){if(hash.charAt(0)==='#'){hash=hash.substr(1);}
location.replace('#'+(HistoryHash.hashPrefix||'')+hash);},setHash:function(hash){if(hash.charAt(0)==='#'){hash=hash.substr(1);}
location.hash=(HistoryHash.hashPrefix||'')+hash;}});hashNotifiers=GlobalEnv._notifiers;if(!hashNotifiers){hashNotifiers=GlobalEnv._notifiers=[];}
Y.Event.define('hashchange',{on:function(node,subscriber,notifier){if(node.compareTo(win)||node.compareTo(Y.config.doc.body)){hashNotifiers.push(notifier);}},detach:function(node,subscriber,notifier){var index=YArray.indexOf(hashNotifiers,notifier);if(index!==-1){hashNotifiers.splice(index,1);}}});oldHash=HistoryHash.getHash();oldUrl=HistoryHash.getUrl();if(HistoryBase.nativeHashChange){Y.Event.attach('hashchange',function(e){var newHash=HistoryHash.getHash(),newUrl=HistoryHash.getUrl();YArray.each(hashNotifiers.concat(),function(notifier){notifier.fire({_event:e,oldHash:oldHash,oldUrl:oldUrl,newHash:newHash,newUrl:newUrl});});oldHash=newHash;oldUrl=newUrl;},win);}else{if(!GlobalEnv._hashPoll){if(Y.UA.webkit&&!Y.UA.chrome&&navigator.vendor.indexOf('Apple')!==-1){Y.on('unload',function(){},win);}
GlobalEnv._hashPoll=Y.later(50,null,function(){var newHash=HistoryHash.getHash(),newUrl;if(oldHash!==newHash){newUrl=HistoryHash.getUrl();YArray.each(hashNotifiers.concat(),function(notifier){notifier.fire({oldHash:oldHash,oldUrl:oldUrl,newHash:newHash,newUrl:newUrl});});oldHash=newHash;oldUrl=newUrl;}},null,true);}}
Y.HistoryHash=HistoryHash;if(useHistoryHTML5===false||(!Y.History&&useHistoryHTML5!==true&&(!HistoryBase.html5||!Y.HistoryHTML5))){Y.History=HistoryHash;}},'3.3.0',{requires:['event-synthetic','history-base','yui-later']});
