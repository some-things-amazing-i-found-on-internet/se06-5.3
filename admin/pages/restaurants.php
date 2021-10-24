<?php require_once("../src/views/header.php") ?>
<!-- Main Content -->
<main class="body-content">

  <!-- Navigation Bar -->
  <?php include("../src/views/navbar.php") ?>

  <!-- Body Content Wrapper -->
  <div class="ms-content-wrapper">
    <div class="row">

      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Restaurant List</li>

          </ol>
        </nav>
        <!-- Active Orders Graph -->
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="ms-panel ms-panel-fh">
              <div class="ms-panel-header">
                <h6>Restaurant wise sales</h6>

              </div>
              <div class="ms-panel-body">

                <div class="row">
                  <div class="col-xl-4 col-md-4">
                    <div class="ms-graph-labels column-direction">
                      <div class="ms-chart-no-label">
                        <span class="bg-success"></span>
                        <p>$9,348,319</p>
                      </div>
                      <div class="ms-chart-no-label">
                        <span class="bg-primary"></span>
                        <p>$4,344,316</p>
                      </div>
                      <div class="ms-chart-no-label">
                        <span class="bg-warning"></span>
                        <p>$518,513</p>
                      </div>
                      <div class="ms-chart-no-label">
                        <span class="bg-danger"></span>
                        <p>$348,319</p>
                      </div>
                      <div class="ms-chart-no-label">
                        <span class="bg-secondary"></span>
                        <p>$3,416,139</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-8 col-md-8">
                    <canvas id="pie-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="ms-panel">
              <div class="ms-panel-header new">
                <h6>Top Food Menu</h6>
              </div>
              <div class="ms-panel-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Food Item</th>
                        <th scope="col">Price</th>
                        <th scope="col">Product ID</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="ms-table-f-w"> <img src="../assets/img/costic/pizza.jpg" alt="people"> Pizza </td>
                        <td>$20</td>
                        <td>67384917</td>
                      </tr>
                      <tr>
                        <td class="ms-table-f-w"> <img src="../assets/img/costic/french-fries.jpg" alt="people"> French Fries </td>
                        <td>$14</td>
                        <td>789393819</td>
                      </tr>
                      <tr>
                        <td class="ms-table-f-w"> <img src="../assets/img/costic/cereals.jpg" alt="people"> Multigrain Hot Cereal </td>
                        <td>$25</td>
                        <td>137893137</td>
                      </tr>
                      <tr>
                        <td class="ms-table-f-w"> <img src="../assets/img/costic/egg-sandwich.jpg" alt="people"> Fried Egg Sandwich </td>
                        <td>$10</td>
                        <td>235193138</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="ms-panel">
              <div class="ms-panel-header">
                <h6>Invoice List</h6>
              </div>
              <div class="ms-panel-body">

                <div class="table-responsive">
                  <table class="table table-hover thead-primary">
                    <thead>
                      <tr>
                        <th scope="col">Restaurant ID</th>
                        <th scope="col">Restaurant Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Ratings</th>
                        <th scope="col">Joining Date</th>

                        <th scope="col">Restaurant Sale(%)</th>
                        <th scope="col">Send / Edit / Delete</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">15451</th>
                        <td>Delizus</td>
                        <td> New York</td>
                        <td>
                          <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                            <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                          </ul>
                        </td>
                        <td>12/10/19</td>
                        <td>90</td>
                        <td><a href='#'><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                          <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                          <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">15452</th>
                        <td>Lumina</td>
                        <td> New York</td>
                        <td>
                          <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                            <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                          </ul>
                        </td>

                        <td>20/9/19</td>
                        <td>99</td>
                        <td><a href='#'><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                          <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                          <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">45263</th>
                        <td>Food Loung</td>
                        <td> New York</td>
                        <td>
                          <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                            <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                          </ul>
                        </td>

                        <td>15/10/19</td>
                        <td>95</td>
                        <td><a href='#'><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                          <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                          <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">45865</th>
                        <td>Hungry House</td>
                        <td> New York</td>
                        <td>
                          <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                            <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                          </ul>
                        </td>

                        <td>21/11/19</td>
                        <td>88</td>
                        <td><a href='#'><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                          <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                          <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">56652</th>
                        <td>Luncheon</td>
                        <td> New York</td>
                        <td>
                          <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                            <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                          </ul>
                        </td>

                        <td>12/11/19</td>
                        <td>81</td>
                        <td><a href='#'><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                          <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                          <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">65845</th>
                        <td>Spice 'n' Steam</td>
                        <td> New York</td>
                        <td>
                          <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                            <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                          </ul>
                        </td>

                        <td>20/10/19</td>
                        <td>91</td>
                        <td><a href='#'><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                          <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                          <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">65425</th>
                        <td>Tomato</td>
                        <td> New York</td>
                        <td>
                          <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                            <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                          </ul>
                        </td>

                        <td>12/10/19</td>
                        <td>77</td>
                        <td><a href='#'><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                          <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                          <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">54556</th>
                        <td>Bardojo</td>
                        <td> New York</td>
                        <td>
                          <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                            <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                          </ul>
                        </td>

                        <td>12/11/19</td>
                        <td>78</td>
                        <td><a href='#'><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                          <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                          <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">45556</th>
                        <td>Deliceiux</td>
                        <td> New York</td>
                        <td>
                          <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                            <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                          </ul>
                        </td>

                        <td>22/10/19</td>
                        <td>88</td>
                        <td><a href='#'><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                          <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                          <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">55856</th>
                        <td>Food Forest</td>
                        <td> New York</td>
                        <td>
                          <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                            <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                          </ul>
                        </td>

                        <td>12/10/19</td>
                        <td>75</td>
                        <td><a href='#'><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                          <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                          <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">36456</th>
                        <td>Food Bella</td>
                        <td> New York</td>
                        <td>
                          <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                            <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                          </ul>
                        </td>

                        <td>18/11/19</td>
                        <td>90</td>
                        <td><a href='#'><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                          <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                          <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">78456</th>
                        <td>Red Chilly</td>
                        <td> New York</td>
                        <td>
                          <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                            <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                            <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                          </ul>
                        </td>

                        <td>12/10/19</td>
                        <td>85</td>
                        <td><a href='#'><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                          <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                          <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a>
                        </td>
                      </tr>


                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


</main>


<!-- MODALS -->


<!-- Quick bar -->
<aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg">

  <ul class="nav nav-tabs ms-quick-bar-list" role="tablist">

    <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch To-do-list" data-title="To-do-list">
      <a href="#qa-toDo" aria-controls="qa-toDo" role="tab" data-toggle="tab">
        <i class="flaticon-list"></i>

      </a>
    </li>
    <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Reminders" data-title="Reminders">
      <a href="#qa-reminder" aria-controls="qa-reminder" role="tab" data-toggle="tab">
        <i class="flaticon-bell"></i>

      </a>
    </li>
    <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Notes" data-title="Notes">
      <a href="#qa-notes" aria-controls="qa-notes" role="tab" data-toggle="tab">
        <i class="flaticon-pencil"></i>

      </a>
    </li>
    <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Invite Members" data-title="Invite Members">
      <a href="#qa-invite" aria-controls="qa-invite" role="tab" data-toggle="tab">
        <i class="flaticon-share-1"></i>

      </a>
    </li>
    <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Settings" data-title="Settings">
      <a href="#qa-settings" aria-controls="qa-settings" role="tab" data-toggle="tab">
        <i class="flaticon-gear"></i>

      </a>
    </li>
  </ul>
  <div class="ms-configure-qa" data-toggle="tooltip" data-placement="left" title="Configure Quick Access">

    <a href="#">
      <i class="flaticon-hammer"></i>

    </a>

  </div>


  <!-- Quick bar Content -->
  <div class="ms-quick-bar-content">

    <div class="ms-quick-bar-header clearfix">
      <h5 class="ms-quick-bar-title float-left">Title</h5>
      <button type="button" class="close ms-toggler" data-target="#ms-quick-bar" data-toggle="hideQuickBar" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

    <div class="ms-quick-bar-body tab-content">



      <div role="tabpanel" class="tab-pane" id="qa-toDo">
        <div class="ms-quickbar-container ms-todo-list-container ms-scrollable">

          <form class="ms-add-task-block">
            <div class="form-group mx-3 mt-0  fs-14 clearfix">
              <input type="text" class="form-control fs-14 float-left" id="task-block" name="todo-block" placeholder="Add Task Block" value="">
              <button type="submit" class="ms-btn-icon bg-primary float-right"><i class="material-icons text-disabled">add</i></button>
            </div>
          </form>

          <ul class="ms-todo-list">
            <li class="ms-card ms-qa-card ms-deletable">

              <div class="ms-card-header clearfix">
                <h6 class="ms-card-title">Task Block Title</h6>
                <button data-toggle="tooltip" data-placement="left" title="Add a Task to this block" class="ms-add-task-to-block ms-btn-icon float-right"> <i class="material-icons text-disabled">add</i> </button>
              </div>

              <div class="ms-card-body">
                <ul class="ms-list ms-task-block">
                  <li class="ms-list-item ms-to-do-task ms-deletable">
                    <label class="ms-checkbox-wrap ms-todo-complete">
                      <input type="checkbox" value="">
                      <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Task to do </span>
                    <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                  </li>
                  <li class="ms-list-item ms-to-do-task ms-deletable">
                    <label class="ms-checkbox-wrap ms-todo-complete">
                      <input type="checkbox" value="">
                      <i class="ms-checkbox-check"></i>
                    </label>
                    <span>Task to do</span>
                    <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                  </li>
                </ul>
              </div>

              <div class="ms-card-footer clearfix">
                <a href="#" class="text-disabled mr-2"> <i class="flaticon-archive"> </i> Archive </a>
                <a href="#" class="text-disabled  ms-delete-trigger float-right"> <i class="flaticon-trash"> </i> Delete </a>
              </div>

            </li>
          </ul>

        </div>
      </div>

      <div role="tabpanel" class="tab-pane" id="qa-reminder">
        <div class="ms-quickbar-container ms-reminders">

          <ul class="ms-qa-options">
            <li> <a href="#" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-bell"></i> New Reminder </a> </li>
          </ul>

          <div class="ms-quickbar-container ms-scrollable">

            <div class="ms-card ms-qa-card ms-deletable">
              <div class="ms-card-body">
                <p> Developer Meeting in Block B </p>
                <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Today - 3:45 pm</span>
              </div>
              <div class="ms-card-footer clearfix">

                <div class="ms-note-editor float-right">
                  <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                  <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </div>
            </div>
            <div class="ms-card ms-qa-card ms-deletable">
              <div class="ms-card-body">
                <p> Start adding change log to version 2 </p>
                <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Tomorrow - 12:00 pm</span>
              </div>
              <div class="ms-card-footer clearfix">

                <div class="ms-note-editor float-right">
                  <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                  <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </div>
            </div>

          </div>

        </div>
      </div>

      <div role="tabpanel" class="tab-pane" id="qa-notes">

        <ul class="ms-qa-options">
          <li> <a href="#" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-sticky-note"></i> New Note </a> </li>
          <li> <a href="#"> <i class="flaticon-excel"></i> Export to Excel </a> </li>
        </ul>

        <div class="ms-quickbar-container ms-scrollable">

          <div class="ms-card ms-qa-card ms-deletable">
            <div class="ms-card-header">
              <h6 class="ms-card-title">Don't forget to check with the designer</h6>
            </div>
            <div class="ms-card-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
              </p>
              <ul class="ms-note-members clearfix mb-0">
                <li class="ms-deletable"> <img src="../assets/img/people/people-3.jpg" alt="member"> </li>
                <li class="ms-deletable"> <img src="../assets/img/people/people-5.jpg" alt="member"> </li>
              </ul>
            </div>
            <div class="ms-card-footer clearfix">

              <div class="dropdown float-left">
                <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flaticon-share-1"></i> Share
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="ms-scrollable ms-dropdown-list ms-members-list">
                    <a class="media p-2" href="#">
                      <div class="mr-2 align-self-center">
                        <img src="../assets/img/people/people-10.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body">
                        <span>John Doe</span>
                      </div>
                    </a>
                    <a class="media p-2" href="#">
                      <div class="mr-2 align-self-center">
                        <img src="../assets/img/people/people-9.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body">
                        <span>Raymart Sandiago</span>
                      </div>
                    </a>
                    <a class="media p-2" href="#">
                      <div class="mr-2 align-self-center">
                        <img src="../assets/img/people/people-7.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body">
                        <span>Heather Brown</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="ms-note-editor float-right">
                <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
              </div>

            </div>
          </div>

          <div class="ms-card ms-qa-card ms-deletable">
            <div class="ms-card-header">
              <h6 class="ms-card-title">Perform the required unit tests</h6>
            </div>
            <div class="ms-card-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
              </p>
              <ul class="ms-note-members clearfix mb-0">
                <li class="ms-deletable"> <img src="../assets/img/people/people-9.jpg" alt="member"> </li>
              </ul>
            </div>
            <div class="ms-card-footer clearfix">

              <div class="dropdown float-left">
                <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flaticon-share-1"></i> Share
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="ms-scrollable ms-dropdown-list ms-members-list">
                    <a class="media p-2" href="#">
                      <div class="mr-2 align-self-center">
                        <img src="../assets/img/people/people-10.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body">
                        <span>John Doe</span>
                      </div>
                    </a>
                    <a class="media p-2" href="#">
                      <div class="mr-2 align-self-center">
                        <img src="../assets/img/people/people-9.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body">
                        <span>Raymart Sandiago</span>
                      </div>
                    </a>
                    <a class="media p-2" href="#">
                      <div class="mr-2 align-self-center">
                        <img src="../assets/img/people/people-7.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body">
                        <span>Heather Brown</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="ms-note-editor float-right">
                <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
              </div>

            </div>
          </div>

        </div>

      </div>

      <div role="tabpanel" class="tab-pane" id="qa-invite">

        <div class="ms-quickbar-container text-center ms-invite-member">
          <i class="flaticon-network"></i>
          <p>Invite Team Members</p>
          <form>
            <div class="ms-form-group">
              <input type="text" placeholder="Member Email" class="form-control" name="invite-email" value="">
            </div>
            <div class="ms-form-group">
              <button type="submit" name="invite-member" class="btn btn-primary w-100">Invite</button>
            </div>
          </form>
        </div>

      </div>

      <div role="tabpanel" class="tab-pane" id="qa-settings">

        <div class="ms-quickbar-container text-center ms-invite-member">
          <div class="row">
            <div class="col-md-12 text-left mb-5">
              <h4 class="section-title bold">Customize</h4>
              <div>
                <label class="ms-switch">
                  <input type="checkbox" id="dark-mode">
                  <span class="ms-switch-slider round"></span>
                </label>
                <span> Dark Mode </span>
              </div>
              <div>
                <label class="ms-switch">
                  <input type="checkbox" id="remove-quickbar">
                  <span class="ms-switch-slider round"></span>
                </label>
                <span> Remove Quickbar </span>
              </div>
            </div>
            <div class="col-md-12 text-left">
              <h4 class="section-title bold">Keyboard Shortcuts</h4>
              <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
              <p class="ms-directions mb-0"><code>Alt + (1 -&gt; 6)</code> Open Quick Bar Tab</p>
              <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>

            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</aside>

<!-- Reminder Modal -->
<div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-secondary">
        <h5 class="modal-title has-icon text-white"> New Reminder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="ms-form-group">
            <label>Remind me about</label>
            <textarea class="form-control" name="reminder"></textarea>
          </div>

          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Repeat Daily</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="ms-form-group">
                <input type="text" class="form-control datepicker" name="reminder-date" value="" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="ms-form-group">
                <select class="form-control" name="reminder-time">
                  <option value="">12:00 pm</option>
                  <option value="">1:00 pm</option>
                  <option value="">2:00 pm</option>
                  <option value="">3:00 pm</option>
                  <option value="">4:00 pm</option>
                </select>
              </div>
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- Notes Modal -->
<div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-secondary">
        <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="ms-form-group">
            <label>Note Title</label>
            <input type="text" class="form-control" name="note-title" value="">
          </div>

          <div class="ms-form-group">
            <label>Note Description</label>
            <textarea class="form-control" name="note-description"></textarea>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script src="../assets/js/jquery-3.5.0.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/perfect-scrollbar.js"> </script>
<script src="../assets/js/jquery-ui.min.js"> </script>
<!-- Global Required Scripts End -->

<!-- Page Specific Scripts Start -->
<script src="../assets/js/Chart.bundle.min.js"> </script>
<script src="../assets/js/Resturant.js"> </script>


<!-- Page Specific Scripts End -->
<!-- Page Specific Scripts Finish -->
<script src="../assets/js/datatables.min.js"> </script>
<script src="../assets/js/data-tables.js"> </script>

<!-- Costic core JavaScript -->
<script src="../assets/js/framework.js"></script>

<!-- Settings -->
<script src="../assets/js/settings.js"> </script>

</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/costic/pages/restaurants.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Oct 2021 03:59:28 GMT -->

</html>