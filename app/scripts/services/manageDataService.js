"use strict";
app.service('manageData', function($http, $q){
    var deferred = $q.defer();
    $http.get('app/data/help-data.json').then(function(data) {
        deferred.resolve(data);
    });
    this.getHelpData = function(){
        return deferred.promise;
    };
});
app.service('manageFormParams', function(){
    this.manageFormData = function(scope){
        scope.form.body=null;
        //scope.form.retinaName=null;
        scope.form.section=null;
        scope.form.filterName=true;
        scope.form.termReq=false;
        if(scope.endpoint=='retina'||scope.endpoint=='classify'){
            scope.form.section=true;
        }
        if(scope.endpoint=='retina'||scope.endpoint=='term'){
            scope.form.body=true;
        }
        if(scope.endpoint=='classify'){
            scope.form.filterName=null;
        }    
    };
});
app.service('getResponse', function(){
    var apiKey = '414898c0-9c58-11e5-9e69-03c0722e0d16', //liteClient = retinaSDK.LiteClient(apiKey),
        fullClient = retinaSDK.FullClient(apiKey);
    // https://github.com/cortical-io/RetinaSDK.js
    this.getResponseData = function(scope, form){
        var data=null,
            responseData = {
                success : function(response){
                    console.log('response success', response);
                    data=response;
                },
                error : function(response){
                    console.log('response error', response);
                }
            },
            dataKey, innerKey, dataInputArray, dataset, methodName;
        function makeDataSet(){
            var dataArray=arguments, dataset = {}; //console.log({args:dataArray, length:dataArray.length});
            for(var i in dataArray){
                dataKey = dataArray[i].split('_'); //console.log('outer dataKey', dataKey);
                for(var y=0, k=dataKey.length; y<k; y++){ //console.group('y: ', y);
                    if(y){ /*console.log({
                            innerKey:innerKey,
                            dataKey:dataKey,
                            'dataKey[y]':dataKey[y],
                            first:dataKey[y][0].toUpperCase(),
                            next:dataKey[y].slice(1)
                        });*/
                        innerKey+=dataKey[y][0].toUpperCase()+dataKey[y].slice(1);
                    }else{
                        innerKey = dataKey[0];
                        //console.log('innerKey start:', innerKey);
                    }   //console.log('innerKey', innerKey); console.groupEnd();
                }
                dataKey = innerKey;
                //console.log('dataKey', dataKey);
                if(form[dataKey]) dataset[dataArray[i]]=form[dataKey];
            }   //console.log('dataset', dataset);
            return dataset;
        }
        //
        switch (scope.endpoint) {
            case 'retina': // optional
                dataset = form.retina_name;
                methodName = 'getRetinas';
                break;
            // term* block
            case 'term':
                switch (form.section) {
                    case 'terms':
                    case 'terms/contexts':
                        dataInputArray=['term', 'start_index', 'max_results', 'get_fingerprints'];
                        methodName = 'get';
                        methodName+=(form.section=='terms')? 'Terms':'ContextsForTerm';
                        break;
                    case 'terms/similar_terms':
                        dataInputArray=['term','context_id', 'start_index', 'max_results', 'pos_type', 'get_fingerprints'];
                        methodName = 'getSimilarTermsForTerm';
                        break;
                }
                break;
            // text* block
            case 'text':
                dataset='text'; // optional
                methodName = 'get';
                switch (scope.section) {
                    case 'text':
                        methodName+='FingerprintForText';
                        break;
                    case 'text/keywords':
                        methodName+='KeywordsForText';
                        break;
                    case 'text/detect_language':
                        methodName+='getLanguageForText';
                        break;
                    case 'text/tokenize': case 'text/slices': // required: 0
                        dataInputArray=['text', 'pos_tags'];
                        methodName+=(form.section=='text/tokenize')? 'TokensForText':'SlicesForText';
                        break;
                    case 'text/bulk':
                        dataInputArray=['texts','sparsity'];
                        methodName = 'FingerprintsForTexts';
                        break;
                }
            // expression* block
            case 'expression':
                //dataInputArray=[{'expression'}];
                switch (scope.section) {
                    case 'expressions':

                        break;
                    case 'expressions/contexts':

                        break;
                    case 'expressions/similar_terms':

                        break;
                    case 'expressions/bulk':

                        break;
                    case 'expressions/contexts/bulk':

                        break;
                    case 'expressions/similar_terms/bulk':

                        break;
                }

                break;
            case 'compare':

                break;
            case 'image':

                break;
            case 'classify':

                break;
        }
        // get data
        fullClient[methodName](dataInputArray||dataset, responseData);
    };
});