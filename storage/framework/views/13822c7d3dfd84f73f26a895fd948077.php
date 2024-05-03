<?php $__env->startSection('content'); ?>
    <div class="container page-index">
        <div class="row">
            <div class="col">
                <h2 class="pb-2">Daftar Barang</h2>
            </div>
            <div class="col-auto">
                <a class="btn-add btn btn-primary" href="<?php echo e(route('barangs.create')); ?>">Tambah Barang</a>
            </div>
        </div>
        <table class="table mt-2 table-info">
            <thead>
                <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($brg->kode_barang); ?></td>
                        <td><?php echo e($brg->nama_barang); ?></td>
                        <td><?php echo e($brg->harga_barang); ?></td>
                        <td><?php echo e($brg->satuan->kode_satuan); ?></td>
                        <td><?php echo e($brg->deskripsi_barang); ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo e(route('barangs.show', $brg->id)); ?>">Detail</a>
                            <a class="btn btn-sm btn-warning" href="<?php echo e(route('barangs.edit', $brg->id)); ?>">Edit</a>

                            <form action="<?php echo e(route('barangs.destroy', $brg->id)); ?>" method="POST" type="button"
                                class="btn btn-danger p-0" onsubmit="return confirm('Yakin Mau Hapus Data ?')">
                                <?php echo csrf_field(); ?>

                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm btn-danger m-0 border-0">Hapus</button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\amira\masterBarangUts\resources\views/Barang/index.blade.php ENDPATH**/ ?>