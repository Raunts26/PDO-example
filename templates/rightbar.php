<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="#control-sidebar-settings-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-gears"></i></a></li>
    <li><a href="#control-sidebar-home-tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-home"></i></a></li>

  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Settings tab content -->
    <div class="tab-pane active" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">Lehe seaded</h3>


        <h3 class="control-sidebar-heading">Menüü seaded</h3>
        <div class="sidebar">

          <ul class="sidebar-menu">
            <li><a href="" data-toggle="modal" data-target="#edit_page_modal"><i class="fa fa-pencil"></i> <span>Muuda lehti</span></a></li>
            <li><a href="" data-toggle="modal" data-target="#add_page_modal"><i class="fa fa-plus"></i> <span>Uus leht</span></a></li>
          </ul>
        </div>

      </form>
    </div>
    <!-- /.tab-pane -->

    <!-- Home tab content -->
    <div class="tab-pane" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-user bg-yellow"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

              <p>New phone +1(800)555-1234</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

              <p>nora@example.com</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-file-code-o bg-green"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

              <p>Execution time 5 seconds</p>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="label label-danger pull-right">70%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Update Resume
              <span class="label label-success pull-right">95%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-success" style="width: 95%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Laravel Integration
              <span class="label label-warning pull-right">50%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Back End Framework
              <span class="label label-primary pull-right">68%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

<!-- New page modal -->
<form onsubmit="return false;">
  <div class="modal fade" id="add_page_modal" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Lisa uus lehekülg</h4>
        </div>
        <div class="modal-body">

          <div class="row">

            <div class="col-sm-6">

              <div class="form-group">
                <label>Parent</label>
                <select class="form-control select2" id="page_parent" style="width: 100%;">
                  <option>Puudub</option>
                  <?php foreach($pages as $page): ?>
                    <option value="<?=$page->id;?>"><?=$page->name;?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <label>Pealkiri</label>
                <input type="text" class="form-control" id="page_name" required>
              </div>

              <div class="form-group">
                <label>Tabi pealkiri</label>
                <input type="text" class="form-control" id="page_title" required>
              </div>

            </div>
            <div class="col-sm-6">

              <div class="form-group">
                <label>URL</label>
                <input type="text" class="form-control" id="page_url" required>
              </div>

              <div class="form-group">
                <label>Õigused</label>
                <select id="page_rights" class="form-control select2" multiple="multiple" data-placeholder="Vali õigused" style="width: 100%;">
                  <option value="0">Kõik</option>
                  <?php foreach($groups as $group): ?>
                    <option value="<?=$page->id;?>"><?=$page->name;?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <label>Ikoon</label>
                <input type="text" class="form-control" id="page_icon" required>
              </div>

            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Sulge</button>
          <button id="create_page" class="btn btn-success" type="submit">Salvesta</button>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Menu edit modal -->
<div class="modal fade" id="edit_page_modal" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Muuda menüüd</h4>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-sm-12">

            <ul id="parent-menu-list" class="todo-list">

              <?php foreach($pages as $page): ?>
                <li>
                  <!-- drag handle -->
                  <span class="handle">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <!-- todo text -->
                  <span class="text"><?=$page->name;?></span>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                  <ul id="child-menu-list" class="todo-list second-menu">
                    <li>
                      <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <!-- todo text -->
                      <span class="text">xd</span>
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                  </ul>
                </li>
              <?php endforeach; ?>

            </ul>

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Sulge</button>
        <button id="create_page" class="btn btn-success" type="submit">Salvesta</button>
      </div>
    </div>
  </div>
</div>
