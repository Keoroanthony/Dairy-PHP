        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100" name="form" action="todo-action.php?q=home.php" method="POST">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" name="text" placeholder="Add To-do">
                  <input type="submit" value="Add" class="add btn btn-primary todo-list-add-btn" name="submit" id="add-task">
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority issues today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
          </div>
          <!-- To do section tab ends -->
        </div>