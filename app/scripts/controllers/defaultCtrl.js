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
            if(toState.name=='home'){
            }else{
                switch ($scope.section) {
                    case 'retina':

                        break;
                    case 'term':

                        break;
                    case 'text':

                        break;
                    case 'expression':

                        break;
                    case 'compare':

                        break;
                    case 'image':

                        break;
                    case 'classify':

                        break;
                }
            }
        });
});
app.controller('contentsCtrl', function($scope, $rootScope, selects){
    // set subsection and retina_name defaults
    $scope.form={};
    $scope.helpvisible={};
    // watch if the subsection has been changed
    $scope.$watch('form.param', function(newValue, oldValue){
        console.log(oldValue+'=>'+newValue);
    });

    $rootScope.$on('$stateChangeStart',
        function(event, toState, toParams, fromState, fromParams, options){
            $scope.section = toState.name.split('.').pop();
            $scope.selectData = selects[$scope.section];
            // handle required fields
            $scope.form.body=null;
            $scope.form.retinaName=null;
            $scope.form.param=null;
            $scope.form.filterName=true;
            if($scope.section=='retina'||$scope.section=='classify'){
                $scope.form.param=true;
            }
            if($scope.section=='retina'||$scope.section=='term'){
                $scope.form.body=true;
            }
            if($scope.section=='classify'){
                $scope.form.filterName=null;
            }
    });
});