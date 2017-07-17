<?php

class ProductModel extends Model
{
    public function getProductById($id)
    {
        $query = "
            SELECT
              id,
              price,
              description,
              image
            FROM product
            WHERE id = %product_id%
        ";

        $query = str_replace('%product_id%', $id, $query);

        return $this->select($query);
    }
}