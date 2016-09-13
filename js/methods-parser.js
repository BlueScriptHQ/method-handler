var MethodParser = (function () {

  var calls = [];
  var callBackFns = [];

  var addCall = function (call, callbackFn) {
    calls.push({call: call});
    callBackFns.push({call: call, callBackFn: callbackFn});
  };

  var execute = function(){
    $.ajax({ url: "../php/parser.php", method: "POST", data: "callArray=" + JSON.stringify(calls), success: function(e){ resultHandler(JSON.parse(e)); } });
  };

  var resultHandler = function(object){
    var index = 0;
    for (var key in object) {
      if (object.hasOwnProperty(key)) {
        callBackFns[index].callBackFn(object[key].result);
        index++;
      }
    }
  };

  return {
    addCall: addCall,
    execute: execute
  };

})();
