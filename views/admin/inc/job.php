<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><?php echo $answer['data']['title']; ?></h4>
          <form method="post" action="" class="form-sample">
            <p class="card-description">
              <?php echo $answer['data']['subtitle']; ?>
            </p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Título del Empleo</label>
                  <div class="col-sm-9">
                    <input name="title" id="title" type="text" class="form-control"
                      value="<?php echo isset($answer['data']['job']) ? $answer['data']['job']->getTitle() : ''; ?>" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Vacantes</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?php //echo $j->getVacancy(); ?>" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Descripción</label>
                </div>
                <!-- </div>
              <div class="col-lg-12 grid-margin stretch-card"> -->
                <div class="form-group row">
                  <div class="col-lg-12">
                    <!-- <div cols="50" rows="15" class="form-control" id="editor" style="height: 300px;" ></div> -->
                    <textarea name="editorTiny" id="editorTiny" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label>Selecciona Imagen</label>
                  <input type="file" name="img[]" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Date of Birth</label>
                  <div class="col-sm-9">
                    <input class="form-control" placeholder="dd/mm/yyyy" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Category</label>
                  <div class="col-sm-9">
                    <select class="form-control">
                      <option>Category1</option>
                      <option>Category2</option>
                      <option>Category3</option>
                      <option>Category4</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Estatus</label>
                  <div class="col-sm-4">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="statusRadios" id="statusRadios1" value="1"
                          <?php //if($j->getId_Status() == 1) echo 'checked' ?? ''; ?>>
                        Activo
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="statusRadios" id="statusRadios2" value="2"
                          <?php // if($j->getId_Status() == 2) echo 'checked' ?? ''; ?>>
                        Inactivo
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p class="card-description">
              Address
            </p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address 1</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">State</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address 2</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Postcode</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">City</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Country</label>
                  <div class="col-sm-9">
                    <select class="form-control">
                      <option>America</option>
                      <option>Italy</option>
                      <option>Russia</option>
                      <option>Britain</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
            <button type="button" class="btn btn-light mb-2" onclick="location.href='/admin/jobs'">Cancelar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>