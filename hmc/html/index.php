<?php
/*
 Licensed to the Apache Software Foundation (ASF) under one
 or more contributor license agreements.  See the NOTICE file
 distributed with this work for additional information
 regarding copyright ownership.  The ASF licenses this file
 to you under the Apache License, Version 2.0 (the
 "License"); you may not use this file except in compliance
 with the License.  You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing,
 software distributed under the License is distributed on an
 "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 KIND, either express or implied.  See the License for the
 specific language governing permissions and limitations
 under the License.
*/
?>
<?php require_once "./_router.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <?php require "./_head.php" ?>
  </head>

  <body class="yui3-skin-sam">
    <div id="container">
      <?php require "./_topnav.php"; ?>
      <?php require "./_utils.php"; ?>

      <div id="content">
        <?php require "./_subnav.php"; ?>

        <div id="clusterInfo">
          <div id="clusterInfoContent"></div>
        </div>
        <div id="clusterHostRoleMapping" style="display:none;margin-top:0">
          <div id="clusterHostRoleMappingContent">
          </div>
        </div>
        <div style="clear:both"></div>
      </div>

      <?php require "./_footer.php"; ?>
    </div>

    <!-- Javascript Scaffolding -->
    <script type="text/javascript">

      var jsFilesToLoad = [ 
        'js/utils.js',
        'js/clustersList.js' 
      ];
    </script>

    <?php require "./_bootstrapJs.php"; ?>
    <!-- End of Javascript Scaffolding -->
  </body>
</html> 
