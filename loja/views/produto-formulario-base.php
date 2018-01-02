<table class="table">
            <tr>
                <td><label for="nome">Nome</label></td>
                <td>
                    <input class="form-control" type="text" name="nome" 
                        value="<?=$produto->getNome()?>">
                </td>
            </tr>
            <tr>
                <td><label for="preco">Preço</label></td>
                <td>
                    <input class="form-control" type="number" name="preco" 
                        value="<?=$produto->getPreco()?>">
                </td>
            </tr>
            <tr>
                <td><label for="descricao">Descrição</label></td>
                <td>
                    <textarea class="form-control" name="descricao"><?=$produto->getDescricao()?></textarea>
                </td>
            </tr>
            <tr>
                <td><label for="usado"></label></td>
                <td><input type="checkbox" name="usado" value="true" <?=$usado?> >Usado</td>
            </tr>
            <tr>
                <td><label for="categoria_id">Categoria</label></td>
                <td>
                    <select name="categoria_id" class="form-control">
                        <?php foreach($categorias as $categoria) : 
                            $ehCategoriaDefinida = $produto->getCategoria() == $categoria['id'];
                            $selecao = $ehCategoriaDefinida ? "selected = 'selected'" : "";
                        ?>
                            <option value="<?=$categoria['id']?>" <?=$selecao?> > 
                                <?=$categoria['nome']?>
                            </option>
                            <br/>
                        <?php endforeach ?>
                    </select>
                </td>
            </tr>
