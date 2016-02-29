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
        scope.form.retinaName=null;
        scope.form.subsection=null;
        scope.form.filterName=true;
        scope.form.termReq=false;
        if(scope.section=='retina'||scope.section=='classify'){
            scope.form.subsection=true;
        }
        if(scope.section=='retina'||scope.section=='term'){
            scope.form.body=true;
        }
        if(scope.section=='classify'){
            scope.form.filterName=null;
        }    
    };
});
app.service('getResponse', function(){
    this.getResponseData = function(scope, form){
        var data;
        switch (scope.section) {
            case 'retina':
                // optional: retina_name (string)
                data = fullClient.getRetinas(form.retinaName); // console.log('retina_name', form.retinaName);
                break;
            case 'term':
                switch (form.subsection) {
                    case 'terms':
                        /*  optional: term (string), start_index (number), max_results (number), get_fingerprint (boolean) */
                        data = fullClient.getTerms(term, start_index, max_results, get_fingerprint);
                        break;
                    case 'terms/contexts':
                        /*  required: term
                         optional: start_index (number), max_results (number), get_fingerprint (boolean)   */
                        data = fullClient.getContextsForTerm(term, start_index, max_results, get_fingerprint);
                        break;
                    case 'terms/similar_terms':
                        /*  required: term
                         optional: context_id (number), start_index (number), max_results (number), pos_type (string), get_fingerprint (boolean)  */
                        data = fullClient.getSimilarTermsForTerm(term, context_id, start_index, max_results, pos_type, get_fingerprint);
                        break;
                }

                break;
            case 'text':
                /*  required: term (string)
                 optional: start_index (number), max_results (number), get_fingerprint (boolean)*/
                //data = fullClient.(term, start_index, max_results, get_fingerprint);
                break;
            case 'expression':
                /**/
                //data = fullClient.getFingerprintForText();
                break;
            case 'compare':
                //data = fullClient.();
                break;
            case 'image':
                //data = fullClient.();
                break;
            case 'classify':
                //data = fullClient.();
                break;
        }
    };
});