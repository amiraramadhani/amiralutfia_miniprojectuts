<?php $__env->startSection('content'); ?>
    <div class="container w-50 mt-3 px-4 py-4 bg-light">
        <h2 class="pb-2 text-center">Edit Barang</h2>
        <div>
            <form class="row g-3 pt-3" action="<?php echo e(route('dftr_barangs.update', $daftar_barang->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="col-md-6">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" name="kode_barang" value="<?php echo e($daftar_barang->kode_barang); ?>" class="form-control"
                        id="kode_barang" readonly>
                </div>
                <div class="col-md-6">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" value="<?php echo e($daftar_barang->nama_barang); ?>" class="form-control"
                        id="nama_barang" requaired>
                </div>
                <div class="col-md-6">
                    <label for="harga_barang" class="form-label">Harga</label>
                    <input type="number" name="harga_barang" value="<?php echo e($daftar_barang->harga_barang); ?>" class="form-control"
                        id="harga_barang" requaired>
                </div>
                <div class="col-md-6">
                    <label for="satuan_barang" class="form-label"></label>
                    <select class="form-select" name="satuan_barang" id="satuan_barang" required>
                        <?php
                            $selected = ''; if ($errors->any()) { $selected = old('satuan'); }
                            else { $selected = $daftar_barang->satuan_barang_id; }
                        ?>
                        <?php $__currentLoopData = $satuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($s->id); ?>" <?php echo e($selected == $s->id ? 'selected' : ''); ?>>
                                <?php echo e($s->kode_satuan . ' - ' . $s->nama_satuan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="deskripsi_barang" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi_barang" class="form-control" id="deskripsi_barang" cols="30" rows="3" requaired><?php echo e($daftar_barang->deskripsi_barang); ?></textarea>
                </div>
                <div class="col-12">
                    <a class="btn btn-outline-secondary px-4 mt-3" href="<?php echo e(route('dftr_barangs.index')); ?>">Kembali</a>
                    <button type="submit" class="btn btn-primary px-4 mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rizqi_f\masterBarangUts\resources\views/listBarang/edit.blade.php ENDPATH**/ ?>