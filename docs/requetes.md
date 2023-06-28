# Requêtes SQL

```sql
SELECT `id`, `name`, `subtitle`, `picture`, `home_order` FROM `category`
```

```sql
SELECT `id`, `name` FROM `type`
```

```sql
SELECT `id`, `name` FROM `brand`
```

```sql
SELECT `product`.`name`, `product`.`price`, `category`.`name`
FROM `product`
INNER JOIN `category` ON `category_id`=`product`.`category_id`
WHERE `category`.`id`= 1
```

```sql
SELECT `category`.`name` AS `Nom de la categorie`, COUNT(product.id) AS `Nb de produit`, `category_id` AS `ID de la catégorie`
FROM `category`
INNER JOIN `product` ON `category`.`id` = `product`.`category_id`
GROUP BY `category`.`name`;
```
