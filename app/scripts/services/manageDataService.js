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
            dataKey, innerKey, dataInputArray,
            dataset,
            methodName,
            // params names
            context_id='context_id',
            get_fingerprint='get_fingerprint',
            max_results='max_results',
            pos_type='pos_type',
            sparsity='sparsity',
            start_index='start_index';

        function makeDataSet(){
            var dataArray=arguments[0], dataset = {};
            console.log({dataArray:dataArray, arguments:arguments});
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
                //dataset = 'retina_name';
                dataInputArray=['retina_name'];
                methodName = 'getRetinas';
                break;
            // term* block
            case 'term':
                dataInputArray=['term'];
                switch (form.section) {
                    case 'terms':
                    case 'terms/contexts':
                        dataInputArray.concat([start_index, max_results, get_fingerprint]);
                        methodName = 'get';
                        methodName+=(form.section=='terms')? 'Terms':'ContextsForTerm';
                        break;
                    case 'terms/similar_terms':
                        dataInputArray.concat([context_id, start_index, max_results, pos_type, get_fingerprint]);
                        methodName = 'getSimilarTermsForTerm';
                        break;
                }
                break;
            // text* block
            case 'text':
                dataInputArray=['text'];
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
                        dataInputArray.push('pos_tags');
                        methodName+=(form.section=='text/tokenize')? 'TokensForText':'SlicesForText';
                        break;
                    case 'text/bulk': /*former texts*/
                        dataInputArray.push(sparsity);
                        methodName = 'FingerprintsForTexts';
                        break;
                }
                break;
            // expression* block
            case 'expression':
                var exp, exps;
                switch (scope.section) {
                    case 'expressions':
                        exp=[sparsity];
                        break;
                    case 'expressions/contexts':
                        exp=[start_index, max_results, get_fingerprint, sparsity];
                        break;
                    case 'expressions/similar_terms':
                        exp=[context_id, start_index, max_results, pos_type, sparsity, get_fingerprint];
                        break;
                    case 'expressions/bulk':
                        exps=[sparsity];
                        break;
                    case 'expressions/contexts/bulk':
                        exps=[start_index, max_results,sparsity, get_fingerprint];
                        break;
                    case 'expressions/similar_terms/bulk':
                        exps=[context_id, start_index, max_results, pos_type, sparsity, get_fingerprint];
                        break;
                }
                dataset=(exp)? [{expression:makeDataSet(exp)}] : [{expressions:makeDataSet(exps)}];
                break;
            case 'compare':

                switch (scope.section) {
                    case 'compare':
                        break;
                    case 'compare/bulk':
                        break;
                }
                break;
            case 'image':

                break;
            case 'classify':

                break;
        }
        // get data
        if(dataInputArray) dataset=makeDataSet(dataInputArray);
        console.log('dataset', dataset);
        //fullClient[methodName](dataInputArray||dataset, responseData);
    };
});