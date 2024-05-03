<?php $__env->startSection('content'); ?>
    <div class="container w-50 px-4 py-4 rounded-4 halaman-detail">
        <h2 class="pb-2 text-center">Detail Barang</h2>

        <div>
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" name="kode_barang" value="<?php echo e($dt_barang->kode_barang); ?>" class="form-control" id="kode_barang" readonly>
                </div>
                <div class="col-md-12">
                    <label for="nama_barang" class="form-label">Nama Barang</label>

                    <input type="text" name="nama_barang" value="<?php echo e($dt_barang->nama_barang); ?>"  class="form-control" id="nama_barang" readonly>
                </div>
                <div class="col-md-12">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input type="number" name="harga_barang" value="<?php echo e($dt_barang->harga_barang); ?>"  class="form-control" id="harga_barang" readonly>
                </div>
                <div class="col-md-12">
                    <label for="satuan_barang" class="form-label">Satuan Barang</label>
                    <input type="text" name="satuan_barang" value="<?php echo e($dt_barang->satuan->kode_satuan . ' - ' . $dt_barang->satuan->nama_satuan); ?>"  class="form-control" id="satuan_barang" readonly>
                </div>
                <div class="col-md-12">
                    <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                    <textarea name="deskripsi_barang" class="form-control" id="deskripsi_barang" cols="30" rows="3" readonly><?php echo e($dt_barang->deskripsi_barang); ?></textarea>
                </div>
                <div class="col-12">
                    <a class="btn btn-success px-4 mt-3 col-12" href="<?php echo e(route('dt_barangs.index')); ?>">Kembali</a>
                </div>
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rizqi_f\masterBarangUts\resources\views/list-barang/show.blade.php ENDPATH**/ ?>