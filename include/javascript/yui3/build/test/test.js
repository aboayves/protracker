/*
 Copyright (c) 2010, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.com/yui/license.html
 version: 3.3.0
 build: 3167
 */
YUI.add('test',function(Y){Y.namespace("Test");Y.Test.Case=function(template){this._should={};for(var prop in template){this[prop]=template[prop];}
if(!Y.Lang.isString(this.name)){this.name="testCase"+Y.guid();}};Y.Test.Case.prototype={resume:function(segment){Y.Test.Runner.resume(segment);},wait:function(segment,delay){var args=arguments;if(Y.Lang.isFunction(args[0])){throw new Y.Test.Wait(args[0],args[1]);}else{throw new Y.Test.Wait(function(){Y.Assert.fail("Timeout: wait() called but resume() never called.");},(Y.Lang.isNumber(args[0])?args[0]:10000));}},setUp:function(){},tearDown:function(){}};Y.Test.Wait=function(segment,delay){this.segment=(Y.Lang.isFunction(segment)?segment:null);this.delay=(Y.Lang.isNumber(delay)?delay:0);};Y.namespace("Test");Y.Test.Suite=function(data){this.name="";this.items=[];if(Y.Lang.isString(data)){this.name=data;}else if(Y.Lang.isObject(data)){Y.mix(this,data,true);}
if(this.name===""){this.name="testSuite"+Y.guid();}};Y.Test.Suite.prototype={add:function(testObject){if(testObject instanceof Y.Test.Suite||testObject instanceof Y.Test.Case){this.items.push(testObject);}
return this;},setUp:function(){},tearDown:function(){}};Y.Test.Runner=(function(){function TestNode(testObject){this.testObject=testObject;this.firstChild=null;this.lastChild=null;this.parent=null;this.next=null;this.results={passed:0,failed:0,total:0,ignored:0,duration:0};if(testObject instanceof Y.Test.Suite){this.results.type="testsuite";this.results.name=testObject.name;}else if(testObject instanceof Y.Test.Case){this.results.type="testcase";this.results.name=testObject.name;}}
TestNode.prototype={appendChild:function(testObject){var node=new TestNode(testObject);if(this.firstChild===null){this.firstChild=this.lastChild=node;}else{this.lastChild.next=node;this.lastChild=node;}
node.parent=this;return node;}};function TestRunner(){TestRunner.superclass.constructor.apply(this,arguments);this.masterSuite=new Y.Test.Suite("yuitests"+(new Date()).getTime());this._cur=null;this._root=null;this._log=true;this._waiting=false;this._running=false;this._lastResults=null;var events=[this.TEST_CASE_BEGIN_EVENT,this.TEST_CASE_COMPLETE_EVENT,this.TEST_SUITE_BEGIN_EVENT,this.TEST_SUITE_COMPLETE_EVENT,this.TEST_PASS_EVENT,this.TEST_FAIL_EVENT,this.TEST_IGNORE_EVENT,this.COMPLETE_EVENT,this.BEGIN_EVENT];for(var i=0;i<events.length;i++){this.on(events[i],this._logEvent,this,true);}}
Y.extend(TestRunner,Y.Event.Target,{TEST_CASE_BEGIN_EVENT:"testcasebegin",TEST_CASE_COMPLETE_EVENT:"testcasecomplete",TEST_SUITE_BEGIN_EVENT:"testsuitebegin",TEST_SUITE_COMPLETE_EVENT:"testsuitecomplete",TEST_PASS_EVENT:"pass",TEST_FAIL_EVENT:"fail",TEST_IGNORE_EVENT:"ignore",COMPLETE_EVENT:"complete",BEGIN_EVENT:"begin",disableLogging:function(){this._log=false;},enableLogging:function(){this._log=true;},_logEvent:function(event){var message="";var messageType="";switch(event.type){case this.BEGIN_EVENT:message="Testing began at "+(new Date()).toString()+".";messageType="info";break;case this.COMPLETE_EVENT:message=Y.substitute("Testing completed at "+
(new Date()).toString()+".\n"+"Passed:{passed} Failed:{failed} "+"Total:{total} ({ignored} ignored)",event.results);messageType="info";break;case this.TEST_FAIL_EVENT:message=event.testName+": failed.\n"+event.error.getMessage();messageType="fail";break;case this.TEST_IGNORE_EVENT:message=event.testName+": ignored.";messageType="ignore";break;case this.TEST_PASS_EVENT:message=event.testName+": passed.";messageType="pass";break;case this.TEST_SUITE_BEGIN_EVENT:message="Test suite \""+event.testSuite.name+"\" started.";messageType="info";break;case this.TEST_SUITE_COMPLETE_EVENT:message=Y.substitute("Test suite \""+
event.testSuite.name+"\" completed"+".\n"+"Passed:{passed} Failed:{failed} "+"Total:{total} ({ignored} ignored)",event.results);messageType="info";break;case this.TEST_CASE_BEGIN_EVENT:message="Test case \""+event.testCase.name+"\" started.";messageType="info";break;case this.TEST_CASE_COMPLETE_EVENT:message=Y.substitute("Test case \""+
event.testCase.name+"\" completed.\n"+"Passed:{passed} Failed:{failed} "+"Total:{total} ({ignored} ignored)",event.results);messageType="info";break;default:message="Unexpected event "+event.type;message="info";}
if(this._log){Y.log(message,messageType,"TestRunner");}},_addTestCaseToTestTree:function(parentNode,testCase){var node=parentNode.appendChild(testCase),prop,testName;for(prop in testCase){if((prop.indexOf("test")===0||(prop.toLowerCase().indexOf("should")>-1&&prop.indexOf(" ")>-1))&&Y.Lang.isFunction(testCase[prop])){node.appendChild(prop);}}},_addTestSuiteToTestTree:function(parentNode,testSuite){var node=parentNode.appendChild(testSuite);for(var i=0;i<testSuite.items.length;i++){if(testSuite.items[i]instanceof Y.Test.Suite){this._addTestSuiteToTestTree(node,testSuite.items[i]);}else if(testSuite.items[i]instanceof Y.Test.Case){this._addTestCaseToTestTree(node,testSuite.items[i]);}}},_buildTestTree:function(){this._root=new TestNode(this.masterSuite);for(var i=0;i<this.masterSuite.items.length;i++){if(this.masterSuite.items[i]instanceof Y.Test.Suite){this._addTestSuiteToTestTree(this._root,this.masterSuite.items[i]);}else if(this.masterSuite.items[i]instanceof Y.Test.Case){this._addTestCaseToTestTree(this._root,this.masterSuite.items[i]);}}},_handleTestObjectComplete:function(node){if(Y.Lang.isObject(node.testObject)){if(node.parent){node.parent.results.passed+=node.results.passed;node.parent.results.failed+=node.results.failed;node.parent.results.total+=node.results.total;node.parent.results.ignored+=node.results.ignored;node.parent.results[node.testObject.name]=node.results;}
if(node.testObject instanceof Y.Test.Suite){node.testObject.tearDown();node.results.duration=(new Date())-node._start;this.fire(this.TEST_SUITE_COMPLETE_EVENT,{testSuite:node.testObject,results:node.results});}else if(node.testObject instanceof Y.Test.Case){node.results.duration=(new Date())-node._start;this.fire(this.TEST_CASE_COMPLETE_EVENT,{testCase:node.testObject,results:node.results});}}},_next:function(){if(this._cur===null){this._cur=this._root;}else if(this._cur.firstChild){this._cur=this._cur.firstChild;}else if(this._cur.next){this._cur=this._cur.next;}else{while(this._cur&&!this._cur.next&&this._cur!==this._root){this._handleTestObjectComplete(this._cur);this._cur=this._cur.parent;}
this._handleTestObjectComplete(this._cur);if(this._cur==this._root){this._cur.results.type="report";this._cur.results.timestamp=(new Date()).toLocaleString();this._cur.results.duration=(new Date())-this._cur._start;this._lastResults=this._cur.results;this._running=false;this.fire(this.COMPLETE_EVENT,{results:this._lastResults});this._cur=null;}else{this._cur=this._cur.next;}}
return this._cur;},_run:function(){var shouldWait=false;var node=this._next();if(node!==null){this._running=true;this._lastResult=null;var testObject=node.testObject;if(Y.Lang.isObject(testObject)){if(testObject instanceof Y.Test.Suite){this.fire(this.TEST_SUITE_BEGIN_EVENT,{testSuite:testObject});node._start=new Date();testObject.setUp();}else if(testObject instanceof Y.Test.Case){this.fire(this.TEST_CASE_BEGIN_EVENT,{testCase:testObject});node._start=new Date();}
if(typeof setTimeout!="undefined"){setTimeout(function(){Y.Test.Runner._run();},0);}else{this._run();}}else{this._runTest(node);}}},_resumeTest:function(segment){var node=this._cur;this._waiting=false;if(!node){return;}
var testName=node.testObject;var testCase=node.parent.testObject;if(testCase.__yui_wait){clearTimeout(testCase.__yui_wait);delete testCase.__yui_wait;}
var shouldFail=(testCase._should.fail||{})[testName];var shouldError=(testCase._should.error||{})[testName];var failed=false;var error=null;try{segment.apply(testCase);if(shouldFail){error=new Y.Assert.ShouldFail();failed=true;}else if(shouldError){error=new Y.Assert.ShouldError();failed=true;}}catch(thrown){if(testCase.__yui_wait){clearTimeout(testCase.__yui_wait);delete testCase.__yui_wait;}
if(thrown instanceof Y.Assert.Error){if(!shouldFail){error=thrown;failed=true;}}else if(thrown instanceof Y.Test.Wait){if(Y.Lang.isFunction(thrown.segment)){if(Y.Lang.isNumber(thrown.delay)){if(typeof setTimeout!="undefined"){testCase.__yui_wait=setTimeout(function(){Y.Test.Runner._resumeTest(thrown.segment);},thrown.delay);this._waiting=true;}else{throw new Error("Asynchronous tests not supported in this environment.");}}}
return;}else{if(!shouldError){error=new Y.Assert.UnexpectedError(thrown);failed=true;}else{if(Y.Lang.isString(shouldError)){if(thrown.message!=shouldError){error=new Y.Assert.UnexpectedError(thrown);failed=true;}}else if(Y.Lang.isFunction(shouldError)){if(!(thrown instanceof shouldError)){error=new Y.Assert.UnexpectedError(thrown);failed=true;}}else if(Y.Lang.isObject(shouldError)){if(!(thrown instanceof shouldError.constructor)||thrown.message!=shouldError.message){error=new Y.Assert.UnexpectedError(thrown);failed=true;}}}}}
if(failed){this.fire(this.TEST_FAIL_EVENT,{testCase:testCase,testName:testName,error:error});}else{this.fire(this.TEST_PASS_EVENT,{testCase:testCase,testName:testName});}
testCase.tearDown();var duration=(new Date())-node._start;node.parent.results[testName]={result:failed?"fail":"pass",message:error?error.getMessage():"Test passed",type:"test",name:testName,duration:duration};if(failed){node.parent.results.failed++;}else{node.parent.results.passed++;}
node.parent.results.total++;if(typeof setTimeout!="undefined"){setTimeout(function(){Y.Test.Runner._run();},0);}else{this._run();}},_handleError:function(error){if(this._waiting){this._resumeTest(function(){throw error;});}else{throw error;}},_runTest:function(node){var testName=node.testObject;var testCase=node.parent.testObject;var test=testCase[testName];var shouldIgnore=(testCase._should.ignore||{})[testName];if(shouldIgnore){node.parent.results[testName]={result:"ignore",message:"Test ignored",type:"test",name:testName};node.parent.results.ignored++;node.parent.results.total++;this.fire(this.TEST_IGNORE_EVENT,{testCase:testCase,testName:testName});if(typeof setTimeout!="undefined"){setTimeout(function(){Y.Test.Runner._run();},0);}else{this._run();}}else{node._start=new Date();testCase.setUp();this._resumeTest(test);}},getName:function(){return this.masterSuite.name;},setName:function(name){this.masterSuite.name=name;},fire:function(type,data){data=data||{};data.type=type;TestRunner.superclass.fire.call(this,type,data);},add:function(testObject){this.masterSuite.add(testObject);return this;},clear:function(){this.masterSuite=new Y.Test.Suite("yuitests"+(new Date()).getTime());},isWaiting:function(){return this._waiting;},isRunning:function(){return this._running;},getResults:function(format){if(!this._running&&this._lastResults){if(Y.Lang.isFunction(format)){return format(this._lastResults);}else{return this._lastResults;}}else{return null;}},getCoverage:function(format){if(!this._running&&typeof _yuitest_coverage=="object"){if(Y.Lang.isFunction(format)){return format(_yuitest_coverage);}else{return _yuitest_coverage;}}else{return null;}},resume:function(segment){if(Y.Test.Runner._waiting){this._resumeTest(segment||function(){});}else{throw new Error("resume() called without wait().");}},run:function(oldMode){var runner=Y.Test.Runner;if(!oldMode&&this.masterSuite.items.length==1&&this.masterSuite.items[0]instanceof Y.Test.Suite){this.masterSuite=this.masterSuite.items[0];}
runner._buildTestTree();runner._root._start=new Date();runner.fire(runner.BEGIN_EVENT);runner._run();}});return new TestRunner();})();Y.Assert={_asserts:0,_formatMessage:function(customMessage,defaultMessage){var message=customMessage;if(Y.Lang.isString(customMessage)&&customMessage.length>0){return Y.Lang.substitute(customMessage,{message:defaultMessage});}else{return defaultMessage;}},_getCount:function(){return this._asserts;},_increment:function(){this._asserts++;},_reset:function(){this._asserts=0;},fail:function(message){throw new Y.Assert.Error(Y.Assert._formatMessage(message,"Test force-failed."));},areEqual:function(expected,actual,message){Y.Assert._increment();if(expected!=actual){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Values should be equal."),expected,actual);}},areNotEqual:function(unexpected,actual,message){Y.Assert._increment();if(unexpected==actual){throw new Y.Assert.UnexpectedValue(Y.Assert._formatMessage(message,"Values should not be equal."),unexpected);}},areNotSame:function(unexpected,actual,message){Y.Assert._increment();if(unexpected===actual){throw new Y.Assert.UnexpectedValue(Y.Assert._formatMessage(message,"Values should not be the same."),unexpected);}},areSame:function(expected,actual,message){Y.Assert._increment();if(expected!==actual){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Values should be the same."),expected,actual);}},isFalse:function(actual,message){Y.Assert._increment();if(false!==actual){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Value should be false."),false,actual);}},isTrue:function(actual,message){Y.Assert._increment();if(true!==actual){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Value should be true."),true,actual);}},isNaN:function(actual,message){Y.Assert._increment();if(!isNaN(actual)){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Value should be NaN."),NaN,actual);}},isNotNaN:function(actual,message){Y.Assert._increment();if(isNaN(actual)){throw new Y.Assert.UnexpectedValue(Y.Assert._formatMessage(message,"Values should not be NaN."),NaN);}},isNotNull:function(actual,message){Y.Assert._increment();if(Y.Lang.isNull(actual)){throw new Y.Assert.UnexpectedValue(Y.Assert._formatMessage(message,"Values should not be null."),null);}},isNotUndefined:function(actual,message){Y.Assert._increment();if(Y.Lang.isUndefined(actual)){throw new Y.Assert.UnexpectedValue(Y.Assert._formatMessage(message,"Value should not be undefined."),undefined);}},isNull:function(actual,message){Y.Assert._increment();if(!Y.Lang.isNull(actual)){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Value should be null."),null,actual);}},isUndefined:function(actual,message){Y.Assert._increment();if(!Y.Lang.isUndefined(actual)){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Value should be undefined."),undefined,actual);}},isArray:function(actual,message){Y.Assert._increment();if(!Y.Lang.isArray(actual)){throw new Y.Assert.UnexpectedValue(Y.Assert._formatMessage(message,"Value should be an array."),actual);}},isBoolean:function(actual,message){Y.Assert._increment();if(!Y.Lang.isBoolean(actual)){throw new Y.Assert.UnexpectedValue(Y.Assert._formatMessage(message,"Value should be a Boolean."),actual);}},isFunction:function(actual,message){Y.Assert._increment();if(!Y.Lang.isFunction(actual)){throw new Y.Assert.UnexpectedValue(Y.Assert._formatMessage(message,"Value should be a function."),actual);}},isInstanceOf:function(expected,actual,message){Y.Assert._increment();if(!(actual instanceof expected)){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Value isn't an instance of expected type."),expected,actual);}},isNumber:function(actual,message){Y.Assert._increment();if(!Y.Lang.isNumber(actual)){throw new Y.Assert.UnexpectedValue(Y.Assert._formatMessage(message,"Value should be a number."),actual);}},isObject:function(actual,message){Y.Assert._increment();if(!Y.Lang.isObject(actual)){throw new Y.Assert.UnexpectedValue(Y.Assert._formatMessage(message,"Value should be an object."),actual);}},isString:function(actual,message){Y.Assert._increment();if(!Y.Lang.isString(actual)){throw new Y.Assert.UnexpectedValue(Y.Assert._formatMessage(message,"Value should be a string."),actual);}},isTypeOf:function(expectedType,actualValue,message){Y.Assert._increment();if(typeof actualValue!=expectedType){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Value should be of type "+expectedType+"."),expected,typeof actualValue);}}};Y.assert=function(condition,message){Y.Assert._increment();if(!condition){throw new Y.Assert.Error(Y.Assert._formatMessage(message,"Assertion failed."));}};Y.fail=Y.Assert.fail;Y.Assert.Error=function(message){arguments.callee.superclass.constructor.call(this,message);this.message=message;this.name="Assert Error";};Y.extend(Y.Assert.Error,Error,{getMessage:function(){return this.message;},toString:function(){return this.name+": "+this.getMessage();},valueOf:function(){return this.toString();}});Y.Assert.ComparisonFailure=function(message,expected,actual){arguments.callee.superclass.constructor.call(this,message);this.expected=expected;this.actual=actual;this.name="ComparisonFailure";};Y.extend(Y.Assert.ComparisonFailure,Y.Assert.Error,{getMessage:function(){return this.message+"\nExpected: "+this.expected+" ("+(typeof this.expected)+")"+"\nActual: "+this.actual+" ("+(typeof this.actual)+")";}});Y.Assert.UnexpectedValue=function(message,unexpected){arguments.callee.superclass.constructor.call(this,message);this.unexpected=unexpected;this.name="UnexpectedValue";};Y.extend(Y.Assert.UnexpectedValue,Y.Assert.Error,{getMessage:function(){return this.message+"\nUnexpected: "+this.unexpected+" ("+(typeof this.unexpected)+") ";}});Y.Assert.ShouldFail=function(message){arguments.callee.superclass.constructor.call(this,message||"This test should fail but didn't.");this.name="ShouldFail";};Y.extend(Y.Assert.ShouldFail,Y.Assert.Error);Y.Assert.ShouldError=function(message){arguments.callee.superclass.constructor.call(this,message||"This test should have thrown an error but didn't.");this.name="ShouldError";};Y.extend(Y.Assert.ShouldError,Y.Assert.Error);Y.Assert.UnexpectedError=function(cause){arguments.callee.superclass.constructor.call(this,"Unexpected error: "+cause.message);this.cause=cause;this.name="UnexpectedError";this.stack=cause.stack;};Y.extend(Y.Assert.UnexpectedError,Y.Assert.Error);Y.ArrayAssert={contains:function(needle,haystack,message){Y.Assert._increment();if(Y.Array.indexOf(haystack,needle)==-1){Y.Assert.fail(Y.Assert._formatMessage(message,"Value "+needle+" ("+(typeof needle)+") not found in array ["+haystack+"]."));}},containsItems:function(needles,haystack,message){Y.Assert._increment();for(var i=0;i<needles.length;i++){if(Y.Array.indexOf(haystack,needles[i])==-1){Y.Assert.fail(Y.Assert._formatMessage(message,"Value "+needles[i]+" ("+(typeof needles[i])+") not found in array ["+haystack+"]."));}}},containsMatch:function(matcher,haystack,message){Y.Assert._increment();if(typeof matcher!="function"){throw new TypeError("ArrayAssert.containsMatch(): First argument must be a function.");}
if(!Y.Array.some(haystack,matcher)){Y.Assert.fail(Y.Assert._formatMessage(message,"No match found in array ["+haystack+"]."));}},doesNotContain:function(needle,haystack,message){Y.Assert._increment();if(Y.Array.indexOf(haystack,needle)>-1){Y.Assert.fail(Y.Assert._formatMessage(message,"Value found in array ["+haystack+"]."));}},doesNotContainItems:function(needles,haystack,message){Y.Assert._increment();for(var i=0;i<needles.length;i++){if(Y.Array.indexOf(haystack,needles[i])>-1){Y.Assert.fail(Y.Assert._formatMessage(message,"Value found in array ["+haystack+"]."));}}},doesNotContainMatch:function(matcher,haystack,message){Y.Assert._increment();if(typeof matcher!="function"){throw new TypeError("ArrayAssert.doesNotContainMatch(): First argument must be a function.");}
if(Y.Array.some(haystack,matcher)){Y.Assert.fail(Y.Assert._formatMessage(message,"Value found in array ["+haystack+"]."));}},indexOf:function(needle,haystack,index,message){Y.Assert._increment();for(var i=0;i<haystack.length;i++){if(haystack[i]===needle){if(index!=i){Y.Assert.fail(Y.Assert._formatMessage(message,"Value exists at index "+i+" but should be at index "+index+"."));}
return;}}
Y.Assert.fail(Y.Assert._formatMessage(message,"Value doesn't exist in array ["+haystack+"]."));},itemsAreEqual:function(expected,actual,message){Y.Assert._increment();if(expected.length!=actual.length){Y.Assert.fail(Y.Assert._formatMessage(message,"Array should have a length of "+expected.length+" but has a length of "+actual.length));}
for(var i=0;i<expected.length;i++){if(expected[i]!=actual[i]){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Values in position "+i+" are not equal."),expected[i],actual[i]);}}},itemsAreEquivalent:function(expected,actual,comparator,message){Y.Assert._increment();if(typeof comparator!="function"){throw new TypeError("ArrayAssert.itemsAreEquivalent(): Third argument must be a function.");}
if(expected.length!=actual.length){Y.Assert.fail(Y.Assert._formatMessage(message,"Array should have a length of "+expected.length+" but has a length of "+actual.length));}
for(var i=0;i<expected.length;i++){if(!comparator(expected[i],actual[i])){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Values in position "+i+" are not equivalent."),expected[i],actual[i]);}}},isEmpty:function(actual,message){Y.Assert._increment();if(actual.length>0){Y.Assert.fail(Y.Assert._formatMessage(message,"Array should be empty."));}},isNotEmpty:function(actual,message){Y.Assert._increment();if(actual.length===0){Y.Assert.fail(Y.Assert._formatMessage(message,"Array should not be empty."));}},itemsAreSame:function(expected,actual,message){Y.Assert._increment();if(expected.length!=actual.length){Y.Assert.fail(Y.Assert._formatMessage(message,"Array should have a length of "+expected.length+" but has a length of "+actual.length));}
for(var i=0;i<expected.length;i++){if(expected[i]!==actual[i]){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Values in position "+i+" are not the same."),expected[i],actual[i]);}}},lastIndexOf:function(needle,haystack,index,message){for(var i=haystack.length;i>=0;i--){if(haystack[i]===needle){if(index!=i){Y.Assert.fail(Y.Assert._formatMessage(message,"Value exists at index "+i+" but should be at index "+index+"."));}
return;}}
Y.Assert.fail(Y.Assert._formatMessage(message,"Value doesn't exist in array."));}};Y.ObjectAssert={areEqual:function(expected,actual,message){Y.Assert._increment();Y.Object.each(expected,function(value,name){if(expected[name]!=actual[name]){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,"Values should be equal for property "+name),expected[name],actual[name]);}});},hasKey:function(propertyName,object,message){Y.Assert._increment();if(!(propertyName in object)){Y.fail(Y.Assert._formatMessage(message,"Property '"+propertyName+"' not found on object."));}},hasKeys:function(properties,object,message){Y.Assert._increment();for(var i=0;i<properties.length;i++){if(!(properties[i]in object)){Y.fail(Y.Assert._formatMessage(message,"Property '"+properties[i]+"' not found on object."));}}},ownsKey:function(propertyName,object,message){Y.Assert._increment();if(!object.hasOwnProperty(propertyName)){Y.fail(Y.Assert._formatMessage(message,"Property '"+propertyName+"' not found on object instance."));}},ownsKeys:function(properties,object,message){Y.Assert._increment();for(var i=0;i<properties.length;i++){if(!object.hasOwnProperty(properties[i])){Y.fail(Y.Assert._formatMessage(message,"Property '"+properties[i]+"' not found on object instance."));}}},ownsNoKeys:function(object,message){Y.Assert._increment();var keys=Y.Object.keys(object);if(keys.length>0){Y.fail(Y.Assert._formatMessage(message,"Object owns "+keys.length+" properties but should own none."));}}};Y.DateAssert={datesAreEqual:function(expected,actual,message){Y.Assert._increment();if(expected instanceof Date&&actual instanceof Date){var msg="";if(expected.getFullYear()!=actual.getFullYear()){msg="Years should be equal.";}
if(expected.getMonth()!=actual.getMonth()){msg="Months should be equal.";}
if(expected.getDate()!=actual.getDate()){msg="Days of month should be equal.";}
if(msg.length){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,msg),expected,actual);}}else{throw new TypeError("Y.Assert.datesAreEqual(): Expected and actual values must be Date objects.");}},timesAreEqual:function(expected,actual,message){Y.Assert._increment();if(expected instanceof Date&&actual instanceof Date){var msg="";if(expected.getHours()!=actual.getHours()){msg="Hours should be equal.";}
if(expected.getMinutes()!=actual.getMinutes()){msg="Minutes should be equal.";}
if(expected.getSeconds()!=actual.getSeconds()){msg="Seconds should be equal.";}
if(msg.length){throw new Y.Assert.ComparisonFailure(Y.Assert._formatMessage(message,msg),expected,actual);}}else{throw new TypeError("DateY.AsserttimesAreEqual(): Expected and actual values must be Date objects.");}}};Y.namespace("Test.Format");function xmlEscape(text){return text.replace(/[<>"'&]/g,function(value){switch(value){case"<":return"&lt;";case">":return"&gt;";case"\"":return"&quot;";case"'":return"&apos;";case"&":return"&amp;";}});}
Y.Test.Format.JSON=function(results){return Y.JSON.stringify(results);};Y.Test.Format.XML=function(results){function serializeToXML(results){var l=Y.Lang,xml="<"+results.type+" name=\""+xmlEscape(results.name)+"\"";if(l.isNumber(results.duration)){xml+=" duration=\""+results.duration+"\"";}
if(results.type=="test"){xml+=" result=\""+results.result+"\" message=\""+xmlEscape(results.message)+"\">";}else{xml+=" passed=\""+results.passed+"\" failed=\""+results.failed+"\" ignored=\""+results.ignored+"\" total=\""+results.total+"\">";Y.Object.each(results,function(value){if(l.isObject(value)&&!l.isArray(value)){xml+=serializeToXML(value);}});}
xml+="</"+results.type+">";return xml;}
return"<?xml version=\"1.0\" encoding=\"UTF-8\"?>"+serializeToXML(results);};Y.Test.Format.JUnitXML=function(results){function serializeToJUnitXML(results){var l=Y.Lang,xml="";switch(results.type){case"test":if(results.result!="ignore"){xml="<testcase name=\""+xmlEscape(results.name)+"\" time=\""+(results.duration/1000)+"\">";if(results.result=="fail"){xml+="<failure message=\""+xmlEscape(results.message)+"\"><![CDATA["+results.message+"]]></failure>";}
xml+="</testcase>";}
break;case"testcase":xml="<testsuite name=\""+xmlEscape(results.name)+"\" tests=\""+results.total+"\" failures=\""+results.failed+"\" time=\""+(results.duration/1000)+"\">";Y.Object.each(results,function(value){if(l.isObject(value)&&!l.isArray(value)){xml+=serializeToJUnitXML(value);}});xml+="</testsuite>";break;case"testsuite":Y.Object.each(results,function(value){if(l.isObject(value)&&!l.isArray(value)){xml+=serializeToJUnitXML(value);}});break;case"report":xml="<testsuites>";Y.Object.each(results,function(value){if(l.isObject(value)&&!l.isArray(value)){xml+=serializeToJUnitXML(value);}});xml+="</testsuites>";}
return xml;}
return"<?xml version=\"1.0\" encoding=\"UTF-8\"?>"+serializeToJUnitXML(results);};Y.Test.Format.TAP=function(results){var currentTestNum=1;function serializeToTAP(results){var l=Y.Lang,text="";switch(results.type){case"test":if(results.result!="ignore"){text="ok "+(currentTestNum++)+" - "+results.name;if(results.result=="fail"){text="not "+text+" - "+results.message;}
text+="\n";}else{text="#Ignored test "+results.name+"\n";}
break;case"testcase":text="#Begin testcase "+results.name+"("+results.failed+" failed of "+results.total+")\n";Y.Object.each(results,function(value){if(l.isObject(value)&&!l.isArray(value)){text+=serializeToTAP(value);}});text+="#End testcase "+results.name+"\n";break;case"testsuite":text="#Begin testsuite "+results.name+"("+results.failed+" failed of "+results.total+")\n";Y.Object.each(results,function(value){if(l.isObject(value)&&!l.isArray(value)){text+=serializeToTAP(value);}});text+="#End testsuite "+results.name+"\n";break;case"report":Y.Object.each(results,function(value){if(l.isObject(value)&&!l.isArray(value)){text+=serializeToTAP(value);}});}
return text;}
return"1.."+results.total+"\n"+serializeToTAP(results);};Y.namespace("Coverage.Format");Y.Coverage.Format.JSON=function(coverage){return Y.JSON.stringify(coverage);};Y.Coverage.Format.XdebugJSON=function(coverage){var report={};Y.Object.each(coverage,function(value,name){report[name]=coverage[name].lines;});return Y.JSON.stringify(report);};Y.namespace("Test");Y.Test.Reporter=function(url,format){this.url=url;this.format=format||Y.Test.Format.XML;this._fields=new Object();this._form=null;this._iframe=null;};Y.Test.Reporter.prototype={constructor:Y.Test.Reporter,addField:function(name,value){this._fields[name]=value;},clearFields:function(){this._fields=new Object();},destroy:function(){if(this._form){this._form.parentNode.removeChild(this._form);this._form=null;}
if(this._iframe){this._iframe.parentNode.removeChild(this._iframe);this._iframe=null;}
this._fields=null;},report:function(results){if(!this._form){this._form=document.createElement("form");this._form.method="post";this._form.style.visibility="hidden";this._form.style.position="absolute";this._form.style.top=0;document.body.appendChild(this._form);var iframeContainer=document.createElement("div");iframeContainer.innerHTML="<iframe name=\"yuiTestTarget\"></iframe>";this._iframe=iframeContainer.firstChild;this._iframe.src="javascript:false";this._iframe.style.visibility="hidden";this._iframe.style.position="absolute";this._iframe.style.top=0;document.body.appendChild(this._iframe);this._form.target="yuiTestTarget";}
this._form.action=this.url;while(this._form.hasChildNodes()){this._form.removeChild(this._form.lastChild);}
this._fields.results=this.format(results);this._fields.useragent=navigator.userAgent;this._fields.timestamp=(new Date()).toLocaleString();Y.Object.each(this._fields,function(value,prop){if(typeof value!="function"){var input=document.createElement("input");input.type="hidden";input.name=prop;input.value=value;this._form.appendChild(input);}},this);delete this._fields.results;delete this._fields.useragent;delete this._fields.timestamp;if(arguments[1]!==false){this._form.submit();}}};Y.Mock=function(template){template=template||{};var mock=null;try{mock=Y.Object(template);}catch(ex){mock={};Y.log("Couldn't create mock with prototype.","warn","Mock");}
Y.Object.each(template,function(name){if(Y.Lang.isFunction(template[name])){mock[name]=function(){Y.Assert.fail("Method "+name+"() was called but was not expected to be.");};}});return mock;};Y.Mock.expect=function(mock,expectation){if(!mock.__expectations){mock.__expectations={};}
if(expectation.method){var name=expectation.method,args=expectation.args||expectation.arguments||[],result=expectation.returns,callCount=Y.Lang.isNumber(expectation.callCount)?expectation.callCount:1,error=expectation.error,run=expectation.run||function(){};mock.__expectations[name]=expectation;expectation.callCount=callCount;expectation.actualCallCount=0;Y.Array.each(args,function(arg,i,array){if(!(array[i]instanceof Y.Mock.Value)){array[i]=Y.Mock.Value(Y.Assert.areSame,[arg],"Argument "+i+" of "+name+"() is incorrect.");}});if(callCount>0){mock[name]=function(){try{expectation.actualCallCount++;Y.Assert.areEqual(args.length,arguments.length,"Method "+name+"() passed incorrect number of arguments.");for(var i=0,len=args.length;i<len;i++){args[i].verify(arguments[i]);}
run.apply(this,arguments);if(error){throw error;}}catch(ex){Y.Test.Runner._handleError(ex);}
return result;};}else{mock[name]=function(){try{Y.Assert.fail("Method "+name+"() should not have been called.");}catch(ex){Y.Test.Runner._handleError(ex);}};}}else if(expectation.property){mock.__expectations[name]=expectation;}};Y.Mock.verify=function(mock){try{Y.Object.each(mock.__expectations,function(expectation){if(expectation.method){Y.Assert.areEqual(expectation.callCount,expectation.actualCallCount,"Method "+expectation.method+"() wasn't called the expected number of times.");}else if(expectation.property){Y.Assert.areEqual(expectation.value,mock[expectation.property],"Property "+expectation.property+" wasn't set to the correct value.");}});}catch(ex){Y.Test.Runner._handleError(ex);}};Y.Mock.Value=function(method,originalArgs,message){if(Y.instanceOf(this,Y.Mock.Value)){this.verify=function(value){var args=[].concat(originalArgs||[]);args.push(value);args.push(message);method.apply(null,args);};}else{return new Y.Mock.Value(method,originalArgs,message);}};Y.Mock.Value.Any=Y.Mock.Value(function(){});Y.Mock.Value.Boolean=Y.Mock.Value(Y.Assert.isBoolean);Y.Mock.Value.Number=Y.Mock.Value(Y.Assert.isNumber);Y.Mock.Value.String=Y.Mock.Value(Y.Assert.isString);Y.Mock.Value.Object=Y.Mock.Value(Y.Assert.isObject);Y.Mock.Value.Function=Y.Mock.Value(Y.Assert.isFunction);if(typeof YUITest=="undefined"||!YUITest){YUITest={TestRunner:Y.Test.Runner,ResultsFormat:Y.Test.Format,CoverageFormat:Y.Coverage.Format};}},'3.3.0',{requires:['substitute','event-base','json-stringify']});
