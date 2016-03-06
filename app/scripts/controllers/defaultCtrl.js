"use strict";

app.controller('defaultCtrl', function($scope, $state, $rootScope, manageData){

    var promise = manageData.getHelpData();
    promise.then(function(response) {
        $scope.helpData = response.data; //console.log('helpData', $scope.helpData);
    });

    $rootScope.$on('$stateChangeStart',
        function(event, toState, toParams, fromState, fromParams, options){
            $scope.endpoint = toState.name.split('.').pop(); //console.log('endpoint', $scope.endpoint);
            // make page title
            $scope.title = $scope.endpoint.charAt(0).toUpperCase() + $scope.endpoint.slice(1);
        });
});
app.controller('contentsCtrl', function($scope, $rootScope, selects, manageFormParams, getResponse, switchNewTextarea){
    // set section and retina_name defaults
    $scope.form={};
    $scope.helpvisible={};
    var form = $scope.form;
    // watch if the section has been changed
    $scope.$watch('form.section', function(newValue, oldValue){
        if(newValue=='terms'){
            form.termReq=false;
        }else if(newValue=='terms/contexts'||newValue=='terms/similar_terms'){
            if(!form.term) form.termReq=true;
        } //console.log('1. form.termReq', form.termReq);
    });
    // if term field value has been changed
    $scope.$watch('form.term', function(newValue, oldValue){
        if(form.section=='terms/contexts'||form.section=='terms/similar_terms')
            form.termReq=!newValue;
    });

    $rootScope.$on('$stateChangeStart',
        function(event, toState, toParams, fromState, fromParams, options){
            $scope.endpoint = toState.name.split('.').pop();
            $scope.selectData = selects[$scope.endpoint];
            manageFormParams.manageFormData($scope);
    });

    $scope.getRetinaData = function(event){
        //
        getResponse.getResponseData($scope, form);
    };

    $scope.txtBodies=2;
    $scope.classAdded = switchNewTextarea.classAdded;

    // add field
    $scope.addTextarea = function(event) {
        $scope.txtBodies=switchNewTextarea.addTextarea(event,$scope.txtBodies);
    };
    // remove field
    $scope.removeTextarea = function(event){
        $scope.txtBodies=switchNewTextarea.removeTextarea(event,$scope.txtBodies);
    }
});