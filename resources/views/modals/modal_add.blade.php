<!-- Modal form to add a student -->
    <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" id="newModalForm">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="first_name">Vezetéknév:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="firstname_add" autofocus required>
                                <small>Max: 250, only text</small>
                                <p class="errorFirstname text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="last_name">Családnév:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="lastname_add" cols="40" rows="2" required></textarea>
                                <small>Max: 250, only text</small>
                                <p class="errorLastname text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="sign">Jel:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="sign_add" cols="40" rows="2"></textarea>
                                <small>Max: 250, only text</small>
                                <p class="errorSign text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="age">Életkor:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="age_add" cols="40" rows="2"></textarea>
                                <small>only number, integer</small>
                                <p class="errorAge text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="siblings_num">Testvérek száma:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="siblings_num_add" cols="40" rows="2" value="{{ $student->siblings_num }}"></textarea>
                                <small>only number or null</small>
                                <p class="errorSiblingsnum text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="city">Település:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="city_add" cols="40" rows="2" value="{{ $student->city  }}"></textarea>
                                <small>max 250</small>
                                <p class="errorCity text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="zip">Irányítószám:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="zip_add" cols="40" rows="2" value="{{ $student->zip  }}"></textarea>
                                <small>max 4 karakter</small>
                                <p class="errorZip text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="street_name">Utcanév:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="street_name_add" cols="40" rows="2" value="{{ $student->street_name  }}"></textarea>
                                <small>max 250, text</small>
                                <p class="errorStreetname text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="street_number">Házszám:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="street_number_add" cols="40" rows="2" value="{{ $student->street_number  }}"></textarea>
                                <small>text, max 250 karakter</small>
                                <p class="errorStreetnumber text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success add" data-dismiss="modal">
                                <span id="" class='glyphicon glyphicon-check'></span> Add
                            </button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                <span class='glyphicon glyphicon-remove'></span> Close
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>