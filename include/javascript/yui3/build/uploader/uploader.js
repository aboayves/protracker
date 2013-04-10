/*
 Copyright (c) 2010, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.com/yui/license.html
 version: 3.3.0
 build: 3167
 */
YUI.add('uploader',function(Y){var Event=Y.Event,Node=Y.Node;var SWFURL=Y.Env.cdn+"uploader/assets/uploader.swf";function Uploader(config){Uploader.superclass.constructor.apply(this,arguments);if(config.hasOwnProperty("boundingBox")){this.set("boundingBox",config.boundingBox);};if(config.hasOwnProperty("buttonSkin")){this.set("buttonSkin",config.buttonSkin);};if(config.hasOwnProperty("transparent")){this.set("transparent",config.transparent);};if(config.hasOwnProperty("swfURL")){this.set("swfURL",config.swfURL);};};Y.extend(Uploader,Y.Base,{uploaderswf:null,_id:"",initializer:function(){this._id=Y.guid("uploader");var oElement=Node.one(this.get("boundingBox"));var params={version:"10.0.45",fixedAttributes:{allowScriptAccess:"always",allowNetworking:"all",scale:"noscale"},flashVars:{}};if(this.get("buttonSkin")!=""){params.flashVars["buttonSkin"]=this.get("buttonSkin");}
if(this.get("transparent")){params.fixedAttributes["wmode"]="transparent";}
this.uploaderswf=new Y.SWF(oElement,this.get("swfURL"),params);var upswf=this.uploaderswf;var relEvent=Y.bind(this._relayEvent,this);upswf.on("swfReady",Y.bind(this._initializeUploader,this));upswf.on("click",relEvent);upswf.on("fileselect",relEvent);upswf.on("mousedown",relEvent);upswf.on("mouseup",relEvent);upswf.on("mouseleave",relEvent);upswf.on("mouseenter",relEvent);upswf.on("uploadcancel",relEvent);upswf.on("uploadcomplete",relEvent);upswf.on("uploadcompletedata",relEvent);upswf.on("uploaderror",relEvent);upswf.on("uploadprogress",relEvent);upswf.on("uploadstart",relEvent);},removeFile:function(fileID){return this.uploaderswf.callSWF("removeFile",[fileID]);},clearFileList:function(){return this.uploaderswf.callSWF("clearFileList",[]);},upload:function(fileID,url,method,postVars,postFileVarName){if(Y.Lang.isArray(fileID)){return this.uploaderswf.callSWF("uploadThese",[fileID,url,method,postVars,postFileVarName]);}
else if(Y.Lang.isString(fileID)){return this.uploaderswf.callSWF("upload",[fileID,url,method,postVars,postFileVarName]);}},uploadThese:function(fileIDs,url,method,postVars,postFileVarName){return this.uploaderswf.callSWF("uploadThese",[fileIDs,url,method,postVars,postFileVarName]);},uploadAll:function(url,method,postVars,postFileVarName){return this.uploaderswf.callSWF("uploadAll",[url,method,postVars,postFileVarName]);},cancel:function(fileID){return this.uploaderswf.callSWF("cancel",[fileID]);},setAllowLogging:function(value){this.uploaderswf.callSWF("setAllowLogging",[value]);},setAllowMultipleFiles:function(value){this.uploaderswf.callSWF("setAllowMultipleFiles",[value]);},setSimUploadLimit:function(value){this.uploaderswf.callSWF("setSimUploadLimit",[value]);},setFileFilters:function(fileFilters){this.uploaderswf.callSWF("setFileFilters",[fileFilters]);},enable:function(){this.uploaderswf.callSWF("enable");},disable:function(){this.uploaderswf.callSWF("disable");},_initializeUploader:function(event){this.publish("uploaderReady",{fireOnce:true});this.fire("uploaderReady",{});},_relayEvent:function(event){this.fire(event.type,event);},toString:function()
{return"Uploader "+this._id;}},{ATTRS:{log:{value:false,setter:"setAllowLogging"},multiFiles:{value:false,setter:"setAllowMultipleFiles"},simLimit:{value:2,setter:"setSimUploadLimit"},fileFilters:{value:[],setter:"setFileFilters"},boundingBox:{value:null,writeOnce:'initOnly'},buttonSkin:{value:null,writeOnce:'initOnly'},transparent:{value:true,writeOnce:'initOnly'},swfURL:{value:SWFURL,writeOnce:'initOnly'}}});Y.Uploader=Uploader;},'3.3.0',{requires:['swf','base','node','event']});
