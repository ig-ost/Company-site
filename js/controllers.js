function cnt($scope,$http) {

    $http.get("php/p.php")
         .success(function(response){
                      $scope.prices = response;
          });
}