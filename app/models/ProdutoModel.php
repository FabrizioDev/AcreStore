<?php 

class ProdutoModel extends DB
{
    public function all(): object
    {
        $produtos = self::connection()->query('SELECT * FROM produto');

        $response = new stdClass();
        $response->data = $produtos->fetchAll();
        $response->count = $produtos->rowCount();
        
        return $response;
    }

    public function get(int $id): object
    {
        $query = self::connection()->prepare('
            SELECT * FROM produto 
            WHERE 
                id = :id
        ');

        $query->bindValue(':id', $id, PDO::PARAM_INT);

        $query->execute();

        return $query->fetch();
    }

    public function search(string $value = ''): object
    {
        $search = self::connection()->prepare("
            SELECT * FROM produto 
            WHERE 
                quantidade > 0
                AND (
                    titulo LIKE :search
                    OR descricao LIKE :search 
                    OR valor LIKE :search 
                )
        ");

        $search->bindValue(':search', "%{$value}%");

        $search->execute();

        $response = new stdClass();
        $response->data = $search->fetchAll();
        $response->count = $search->rowCount();
        
        return $response;
    }

    public function create(array $data): int
    {
        $create = self::connection()->prepare('
            INSERT INTO produto (
                titulo,
                valor,
                quantidade,
                imagem, 
                descricao
            ) VALUES (
                :titulo,
                :valor,
                :quantidade,
                :imagem, 
                :descricao
            )
        ');

        $create->bindValue(':titulo', $data['titulo']);
        $create->bindValue(':valor', $data['valor']);
        $create->bindValue(':quantidade', $data['quantidade']);
        $create->bindValue(':imagem', $data['imagem']);
        $create->bindValue(':descricao', $data['descricao']);

        $create->execute();

        return (int) (self::connection()->lastInsertId() > 0) ? self::connection()->lastInsertId() : -1;
    }

    public function update(int $id, array $data): bool
    {
        $update = self::connection()->prepare('
            UPDATE
                produto
            SET 
                titulo = :titulo,
                valor = :valor,
                quantidade = :quantidade,
                imagem = :imagem, 
                descricao = :descricao
            WHERE
                id = :id
        ');

        $update->bindValue(':titulo', $data['titulo']);
        $update->bindValue(':valor', $data['valor']);
        $update->bindValue(':quantidade', $data['quantidade']);
        $update->bindValue(':imagem', $data['imagem']);
        $update->bindValue(':descricao', $data['descricao']);
        $update->bindValue(':id', $id);

        $status = $update->execute();

        return ($update->rowCount() == 1 or $status) ? true : false;
    }

    public function delete(int $id): bool
    {
        $delete = self::connection()->prepare('
            DELETE FROM produto 
            WHERE 
                id = :id
        ');

        $delete->bindValue(':id', $id, PDO::PARAM_INT);

        $delete->execute();

        return $delete->rowCount() == 1 ? true : false;
    }
}