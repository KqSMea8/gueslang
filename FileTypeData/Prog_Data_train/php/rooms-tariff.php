<?php include 'header.php';?>

<div class="container">

<h2>Tariffs</h2>

<!-- prueba -->
<div ng-app="myApp" ng-app lang="en">
<div ng-controller="customersCrtl">
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter month or prize or week" class="form-control" />
        </div>
        <div class="col-md-4">
            <h5>Filtered {{ filtered.length }} of {{ totalItems}} total rates</h5>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12" ng-show="filteredItems > 0">
            <table class="table table-striped table-bordered">
            <thead>
            <th>Month&nbsp;<a ng-click="sort_by('Month');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Weeks&nbsp;<a ng-click="sort_by('Weeks');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Prize&nbsp;<a ng-click="sort_by('Prize');"><i class="glyphicon glyphicon-sort"></i></a></th>
            </thead>
            <tbody>
                <tr ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td>{{data.Month}}</td>
                    <td>{{data.Weeks}}</td>
                    <td>{{data.Prize | currency: "€"}}</td>

                </tr>
            </tbody>
            </table>
        </div>
        <div class="col-md-12" ng-show="filteredItems == 0">
            <div class="col-md-12">
                <h4>No rates found</h4>
            </div>
        </div>
        <div class="col-md-12" ng-show="filteredItems > 0">    
            <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
            
            
        </div>
    </div>
</div>
</div>
</div>

<!-- prueba -->
</div>
<script src="js/angular.min.js"></script>
<script src="js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script src="app/app.js"></script>  
<?php include 'footer.php';?>