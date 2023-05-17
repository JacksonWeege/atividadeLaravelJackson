<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listagem de Filmes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <fieldset>
            <legend>Lista de Filmes</legend>
            <table>
                <tr>
                    <th>
                        Nome
                    </th>
                    <th>
                        Gênero
                    </th>
                    <th>
                        Poster
                    </th>
                </tr>
                <?php $__currentLoopData = $filmes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td align="right">
                            <h3><?php echo e($filme->nome); ?></h3>
                        </td>
                        <td align="right">
                            <?php echo e($filme->genero); ?>

                        </td>
                        <td align="right">
                            <img src="<?php echo e($filme->imagem); ?>" style="max-width:200px; max-height:200px; width: auto; height: auto;">
                        </td>
                        <td>
                            <form action="<?php echo e(route('filmes.delete', $filme->id)); ?>" method="POST">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </fieldset>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\Users\1017763\Documents\projetos\web2\atividadeLaravel\resources\views/filmes.blade.php ENDPATH**/ ?>