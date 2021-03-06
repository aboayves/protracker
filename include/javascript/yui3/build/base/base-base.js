/*
 Copyright (c) 2010, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.com/yui/license.html
 version: 3.3.0
 build: 3167
 */
YUI.add('base-base',function(Y){var O=Y.Object,L=Y.Lang,DOT=".",DESTROY="destroy",INIT="init",INITIALIZED="initialized",DESTROYED="destroyed",INITIALIZER="initializer",BUBBLETARGETS="bubbleTargets",_BUBBLETARGETS="_bubbleTargets",OBJECT_CONSTRUCTOR=Object.prototype.constructor,DEEP="deep",SHALLOW="shallow",DESTRUCTOR="destructor",Attribute=Y.Attribute;function Base(){Y.stamp(this);Attribute.call(this);var PluginHost=Y.Plugin&&Y.Plugin.Host;if(this._initPlugins&&PluginHost){PluginHost.call(this);}
if(this._lazyAddAttrs!==false){this._lazyAddAttrs=true;}
this.name=this.constructor.NAME;this._eventPrefix=this.constructor.EVENT_PREFIX||this.constructor.NAME;this.init.apply(this,arguments);}
Base._ATTR_CFG=Attribute._ATTR_CFG.concat("cloneDefaultValue");Base.NAME="base";Base.ATTRS={initialized:{readOnly:true,value:false},destroyed:{readOnly:true,value:false}};Base.prototype={init:function(config){this._yuievt.config.prefix=this._eventPrefix;this.publish(INIT,{queuable:false,fireOnce:true,defaultTargetOnly:true,defaultFn:this._defInitFn});this._preInitEventCfg(config);this.fire(INIT,{cfg:config});return this;},_preInitEventCfg:function(config){if(config){if(config.on){this.on(config.on);}
if(config.after){this.after(config.after);}}
var i,l,target,userTargets=(config&&BUBBLETARGETS in config);if(userTargets||_BUBBLETARGETS in this){target=userTargets?(config&&config.bubbleTargets):this._bubbleTargets;if(L.isArray(target)){for(i=0,l=target.length;i<l;i++){this.addTarget(target[i]);}}else if(target){this.addTarget(target);}}},destroy:function(){this.publish(DESTROY,{queuable:false,fireOnce:true,defaultTargetOnly:true,defaultFn:this._defDestroyFn});this.fire(DESTROY);this.detachAll();return this;},_defInitFn:function(e){this._initHierarchy(e.cfg);if(this._initPlugins){this._initPlugins(e.cfg);}
this._set(INITIALIZED,true);},_defDestroyFn:function(e){this._destroyHierarchy();if(this._destroyPlugins){this._destroyPlugins();}
this._set(DESTROYED,true);},_getClasses:function(){if(!this._classes){this._initHierarchyData();}
return this._classes;},_getAttrCfgs:function(){if(!this._attrs){this._initHierarchyData();}
return this._attrs;},_filterAttrCfgs:function(clazz,allCfgs){var cfgs=null,attr,attrs=clazz.ATTRS;if(attrs){for(attr in attrs){if(attrs.hasOwnProperty(attr)&&allCfgs[attr]){cfgs=cfgs||{};cfgs[attr]=allCfgs[attr];delete allCfgs[attr];}}}
return cfgs;},_initHierarchyData:function(){var c=this.constructor,classes=[],attrs=[];while(c){classes[classes.length]=c;if(c.ATTRS){attrs[attrs.length]=c.ATTRS;}
c=c.superclass?c.superclass.constructor:null;}
this._classes=classes;this._attrs=this._aggregateAttrs(attrs);},_aggregateAttrs:function(allAttrs){var attr,attrs,cfg,val,path,i,clone,cfgProps=Base._ATTR_CFG,aggAttrs={};if(allAttrs){for(i=allAttrs.length-1;i>=0;--i){attrs=allAttrs[i];for(attr in attrs){if(attrs.hasOwnProperty(attr)){cfg=Y.mix({},attrs[attr],true,cfgProps);val=cfg.value;clone=cfg.cloneDefaultValue;if(val){if((clone===undefined&&(OBJECT_CONSTRUCTOR===val.constructor||L.isArray(val)))||clone===DEEP||clone===true){cfg.value=Y.clone(val);}else if(clone===SHALLOW){cfg.value=Y.merge(val);}}
path=null;if(attr.indexOf(DOT)!==-1){path=attr.split(DOT);attr=path.shift();}
if(path&&aggAttrs[attr]&&aggAttrs[attr].value){O.setValue(aggAttrs[attr].value,path,val);}else if(!path){if(!aggAttrs[attr]){aggAttrs[attr]=cfg;}else{Y.mix(aggAttrs[attr],cfg,true,cfgProps);}}}}}}
return aggAttrs;},_initHierarchy:function(userVals){var lazy=this._lazyAddAttrs,constr,constrProto,ci,ei,el,classes=this._getClasses(),attrCfgs=this._getAttrCfgs();for(ci=classes.length-1;ci>=0;ci--){constr=classes[ci];constrProto=constr.prototype;if(constr._yuibuild&&constr._yuibuild.exts){for(ei=0,el=constr._yuibuild.exts.length;ei<el;ei++){constr._yuibuild.exts[ei].apply(this,arguments);}}
this.addAttrs(this._filterAttrCfgs(constr,attrCfgs),userVals,lazy);if(constrProto.hasOwnProperty(INITIALIZER)){constrProto.initializer.apply(this,arguments);}}},_destroyHierarchy:function(){var constr,constrProto,ci,cl,classes=this._getClasses();for(ci=0,cl=classes.length;ci<cl;ci++){constr=classes[ci];constrProto=constr.prototype;if(constrProto.hasOwnProperty(DESTRUCTOR)){constrProto.destructor.apply(this,arguments);}}},toString:function(){return this.name+"["+Y.stamp(this,true)+"]";}};Y.mix(Base,Attribute,false,null,1);Base.prototype.constructor=Base;Y.Base=Base;},'3.3.0',{requires:['attribute-base']});
