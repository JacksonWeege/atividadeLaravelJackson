<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro de Filmes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if($mensagem = Session::get('sucesso')): ?>
        <?php echo e($mensagem); ?>

        <?php endif; ?>    

        <form method="POST" action="<?php echo e(route('filmes.cadastrar')); ?>">
            <?php echo csrf_field(); ?>
            <fieldset>
                <legend>Formulário de Cadastro</legend>
                <table>
                    <tr>
                        <td>
                            <label for="nome">Nome</label>
                        </td>
                        <td>
                            <input type="text" name="nome" id="nome">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="genero">Gênero</label>
                        </td>
                        <td>
                            <input type="text" name="genero" id="genero">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="imagem">Link Imagem</label>
                        </td>
                        <td>
                            <input type="text" name="imagem" id="imagem">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit">Cadastrar</button>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\Users\1017763\Documents\projetos\web2\atividadeLaravel\resources\views/cadastro.blade.php ENDPATH**/ ?>