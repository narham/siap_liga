<?= $this->extend('template/admin/index'); ?>
<?= $this->Section('page'); ?>
<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Users
                <a href="<?= base_url('admin/users/add'); ?>" class="btn btn-sm btn-outline-primary float-end"><i
                        class="fas fa-plus-circle"></i>
                    Add</a>
                <a href="<?= base_url('admin/dashboard'); ?>" class="btn btn-sm btn-outline-info float-end me-1"><i
                        class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
            </h3>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Philip Chaney</td>
                            <td>philip.chaney@gmail.com</td>
                            <td>Manager</td>
                            <td>Admin</td>
                            <td>Active</td>
                            <td class="text-end">
                                <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Doris Greene</td>
                            <td>ms.greene@outlook.com</td>
                            <td>Writer</td>
                            <td>Staff</td>
                            <td>Active</td>
                            <td class="text-end">
                                <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mason Porter</td>
                            <td>mason_porter@gmail.com</td>
                            <td>Contributor</td>
                            <td>Staff</td>
                            <td>Active</td>
                            <td class="text-end">
                                <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Minerva Hooper</td>
                            <td>minerva.hooper@gmail.com</td>
                            <td>Administrator</td>
                            <td>Admin</td>
                            <td>Disabled</td>
                            <td class="text-end">
                                <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Jessie Williams</td>
                            <td>jessie@gmail.com</td>
                            <td>Administrator</td>
                            <td>Admin</td>
                            <td>Active</td>
                            <td class="text-end">
                                <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Peter Benhams</td>
                            <td>pette@gmail.com</td>
                            <td>Editor</td>
                            <td>Staff</td>
                            <td>Active</td>
                            <td class="text-end">
                                <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Jose Rodriguez</td>
                            <td>jose.rodz@gmail.com</td>
                            <td>Author</td>
                            <td>Staff</td>
                            <td>Active</td>
                            <td class="text-end">
                                <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>