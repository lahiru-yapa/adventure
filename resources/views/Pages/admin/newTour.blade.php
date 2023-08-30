@extends('Pages.admin.Layout.app')
@section('content')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Add New Package</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Add New Package</h4>
                </div>
                <div class="bor">
                    <form enctype='multipart/form-data' method="POST" action="{{ route('admin_create') }}">
                        @csrf
                        <div class="row">


                            <div class="input-field col s12">
                                <input id="list-title" type="text" class="validate" name="pcg_name">
                                <label for="list-title">Package Name</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="list-title" type="text" class="validate"name="map">
                                <label for="list-title">Map</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="list-title" type="text" class="validate" name="location">
                                <label for="list-title">Location</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="list-title" type="text" class="validate" name="included">
                                <label for="list-title">Included</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="list-title" type="text" class="validate" name="group_size">
                                <label for="list-title">Group size</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="list-title" type="text" class="validate" name="price">
                                <label for="list-title">Price</label>
                            </div>

                            <div class="input-field col s12">
                                <textarea id="editor" name="editor">Your content here</textarea>
                                <label for="list-title">Price</label>
                            </div>


                            <div class="input-field col s12">
                                <div class="file-field">
                                    <div class="btn">
                                        <span>Files</span>
                                        <input type="file" name="image_files[]" accept="image/*" multiple>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload Blog Banners"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea" name="description"></textarea>
                                <label for="textarea1">Package Descriptions:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <select multiple>
                                    <option value="" disabled selected>Choose Category</option>
                                    <option value="1">Hotels</option>

                                </select>
                                <label>Select Category</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
