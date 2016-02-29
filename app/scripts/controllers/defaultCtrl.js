"use strict";

app.controller('defaultCtrl', function($scope, $state, $rootScope, manageData){

    var promise = manageData.getHelpData();
    promise.then(function(response) {
        $scope.helpData = response.data;
        //console.log('helpData', $scope.helpData);
    });

    $rootScope.$on('$stateChangeStart',
        function(event, toState, toParams, fromState, fromParams, options){
            $scope.section = toState.name.split('.').pop(); //console.log('section', $scope.section);
            // make page title
            $scope.title = $scope.section.charAt(0).toUpperCase() + $scope.section.slice(1);
        });
});
app.controller('contentsCtrl', function($scope, $rootScope, selects, manageFormParams, getResponse){
    // set subsection and retina_name defaults
    $scope.form={};
    $scope.helpvisible={};
    // watch if the subsection has been changed
    $scope.$watch('form.subsection', function(newValue, oldValue){
        console.log(oldValue+'=>'+newValue);
        if(newValue=='terms'){
            $scope.form.termReq=false;
        }else if(newValue=='terms/contexts'||newValue=='terms/similar_terms'){
            if(!$scope.form.term) $scope.form.termReq=true;
        }
        console.log('1. form.termReq', $scope.form.termReq);
    });
    // if term field value has been changed
    $scope.$watch('form.term', function(newValue, oldValue){
        if($scope.form.subsection=='terms/contexts'||$scope.form.subsection=='terms/similar_terms')
            if(newValue) $scope.form.termReq=false;
        console.log('2. form.termReq', $scope.form.termReq);
    });

    $rootScope.$on('$stateChangeStart',
        function(event, toState, toParams, fromState, fromParams, options){
            $scope.section = toState.name.split('.').pop();
            $scope.selectData = selects[$scope.section];
            manageFormParams.manageFormData($scope);
    });


    var apiKey = '414898c0-9c58-11e5-9e69-03c0722e0d16',
        //liteClient = retinaSDK.LiteClient(apiKey),
        fullClient = retinaSDK.FullClient(apiKey);
    $scope.getRetinaData = function(event){
        var formElement = angular.element(event.currentTarget),
            form = $scope.form;
        console.log('title, form, fullClient, scope', { section:$scope.section, form:$scope.form, fullClient:fullClient, 'scope':$scope });
        getResponse.getResponseData($scope, $scope.form);
    }

});