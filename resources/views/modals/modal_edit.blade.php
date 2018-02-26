<div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_edit" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="first_name">Családnév:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="first_name_edit" autofocus>
                                <p class="errorFirstname text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="last_name">Keresztnév:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="last_name_edit" cols="40" rows="2"></textarea>
                                <p class="errorLastname text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="sign">Jel:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="sign_edit" cols="40" rows="2"></textarea>
                                <p class="errorSign text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="age">Életkor:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="age_edit" cols="40" rows="2"></textarea>
                                <p class="errorAge text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="siblings_num">Testvérek száma:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="siblings_num_edit" cols="40" rows="2"></textarea>
                                <p class="errorSiblingsnum text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="city">Település:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="city_edit" cols="40" rows="2"></textarea>
                                <p class="errorCity text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="zip">Irányítószám:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="zip_edit" cols="40" rows="2"></textarea>
                                <p class="errorZip text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="street_name">Utcanév:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="street_name_edit" cols="40" rows="2"></textarea>
                                <p class="errorStreetname text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="street_number">Házszám:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="street_number_edit" cols="40" rows="2"></textarea>
                                <p class="errorStreetnumber text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                            <span class='glyphicon glyphicon-check'></span> Edit
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>