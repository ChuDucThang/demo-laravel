@extends('backend.index')

@section('content_backend')
<!-- CONTENT -->
<div id="content" data-uk-height-viewport="expand: true">
    <div class="uk-container uk-container-expand">
        <!--  -->
        <!--  -->
        <ul class="uk-breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Danh mục</a></li>
        </ul>

        <table class="uk-table uk-table-responsive uk-table-hover uk-table-divider">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>
                        <button class="ui teal button button-edit">Sửa</button>
                        <button class="ui red button">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>
                        <button class="ui teal button">Sửa</button>
                        <button class="ui red button">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>
                        <button class="ui teal button">Sửa</button>
                        <button class="ui red button">Xóa</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--  -->
        <!--  -->
        <div class="uk-grid uk-grid-medium" data-uk-grid uk-sortable="handle: .sortable-icon">
            
        </div>
    </div>
</div>
<!-- /CONTENT -->
<!-- Modal -->

<div id="edit-modal" class="ui modal">
    <div class="header">
    Sửa thông tin
    <div class="left-col">
        <i class="close icon"></i>
    </div>
    </div>
    <div class="image content">
    <div class="description">
        <div class="ui header">We've auto-chosen a profile image for you.</div>
        <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
        <p>Is it okay to use this photo?</p>
    </div>
    </div>
    <div class="actions">
    <div class="ui black deny button">
        Nope
    </div>
    <div class="ui positive right labeled icon button">
        Yep, that's me
        <i class="checkmark icon"></i>
    </div>
    </div>
</div>
<!-- End Modal -->
@endsection

@push('custom-scripts')
    <script>
        $('.button-edit').click(function(){
            $('.modal').modal('show');
        });
    </script>
@endpush