@include ('layouts.headajax')

@extends ('layouts.masterajax')

@section ('main')

<body>


    <div class="col-md-8 col-md-offset-2">
        <h2 class="text-center">Manage Students
            </h2 <br />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul>
                        <li><i class="fa fa-file-text-o"></i> All the Students</li>
                        <a href="#" class="add-modal">
                            <li>Add a Student</li>
                        </a>
                    </ul>
                </div>
                <div class="panel-body">
                    <!-- Table-to-load-the-data Part -->
                    <table class="table table-striped table-bordered table-hover" id="postTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Vezetéknév</th>
                                <th>Keresztnév</th>
                                <th>Jel</th>
                                <th>Életkor</th>
                                <th>Testvérek száma</th>
                            </tr>
                            {{ csrf_field() }}
                        </thead>
                        <tbody id="students-list" name="students-list">
                            @foreach($students as $student)
                            <tr class="item{{$student->id}}">
                                <td class="col1">{{ $student->id }}</td>
                                <td>{{$student->first_name}}</td>
                                <td>{{$student->last_name}}</td>
                                <td>{{$student->sign}}</td>
                                <td>{{$student->age}}</td>
                                <td>{{$student->siblings_num}}</td>
                                <td>
                                    <button class="show-modal btn btn-success" data-id="{{$student->id}}" data-first_name="{{$student->first_name}}" data-last_name="{{$student->last_name}}"
                                        data-sign="{{$student->sign}}" data-age="{{$student->age}}" data-siblings_num="{{$student->siblings_num}}"
                                        data-city="{{$student->city}}" data-zip="{{$student->zip}}" data-street_name="{{$student->street_name}}"
                                        data-street_number="{{$student->street_number}}">
                                <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                    <button class="edit-modal btn btn-info" data-id="{{$student->id}}" data-first_name="{{$student->first_name}}" data-last_name="{{$student->last_name}}"
                                        data-sign="{{$student->sign}}" data-age="{{$student->age}}" data-siblings_num="{{$student->siblings_num}}"
                                        data-city="{{$student->city}}" data-zip="{{$student->zip}}" data-street_name="{{$student->street_name}}"
                                        data-street_number="{{$student->street_number}}">
                                    <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                    <button class="delete-modal btn btn-danger" data-id="{{$student->id}}" data-first_name="{{$student->first_name}}" data-last_name="{{$student->last_name}}"
                                        data-sign="{{$student->sign}}" data-age="{{$student->age}}" data-siblings_num="{{$student->siblings_num}}">
                                    <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel panel-default -->
    </div>
    <!-- /.col-md-8 -->
    @include ('modals.modal_add')
    <!-- Modal form to add a student -->
    
    @include ('modals.modal_show')
    <!-- Modal form to show a student -->
    
    @include ('modals.modal_edit')
    <!-- Modal form to edit a form -->
    
    @include ('modals.modal_delete')
    <!-- Modal form to delete a form -->
    

@endsection
    
</body>
</html>