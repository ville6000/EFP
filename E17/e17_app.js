/*global angular: true */

(function () {
    'use strict';

    angular.module('bacApp', []);

    angular.module('bacApp').controller('CalculatorController', ['$scope', 'BacService', CalculatorController]);

    function CalculatorController($scope, BacService) {
        var LEGAL_LIMIT = 0.08;
        $scope.isCalculated = false;
        $scope.bac = {
            alcoholConsumed: 0,
            bodyWeight: 185,
            gender: 'male',
            hoursSinceLastDrink: 1
        };

        $scope.$watch('bacLevel', function () {
            $scope.isOverLimit = $scope.bacLevel >= LEGAL_LIMIT;
        }, true);

        this.calculateBAC = function () {
            $scope.bacLevel = BacService.calculateBAC(
                $scope.bac.alcoholConsumed,
                $scope.bac.bodyWeight,
                $scope.bac.gender,
                $scope.bac.hoursSinceLastDrink
            );

            $scope.isCalculated = true;
        };
    }

    angular.module('bacApp').factory('BacService', BacService);

    function BacService() {
        this.calculateBAC = function (alcoholConsumed, weight, gender, hoursSinceLastDrink) {
            var bac = (alcoholConsumed * 5.14 / weight * getDistributionRatio(gender)) - 0.015 * hoursSinceLastDrink;

            if (bac < 0) {
                return 0;
            } else {
                return bac.toFixed(4);
            }
        };

        function getDistributionRatio (gender) {
            return (gender === 'male') ? 0.73 : 0.66;
        }

        return {
            'calculateBAC': this.calculateBAC
        };
    }
})();