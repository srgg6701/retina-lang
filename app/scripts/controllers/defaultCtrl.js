"use strict";

app.controller('defaultCtrl', function($scope, $state, $rootScope){
    //console.log('defaultCtrl works, url:', $state.current);
    $rootScope.$on('$stateChangeStart',
        function(event, toState, toParams, fromState, fromParams, options){
            // make page title
            $scope.title = toState.name.charAt(0).toUpperCase() + toState.name.slice(1);
            console.log('event, toState, toParams, fromState, fromParams, options',
            {   event:event, toState:toState, toParams:toParams,
                fromState:fromState, fromParams:fromParams, options:options });
        });
});