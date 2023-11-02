SELECT
    C.name AS category_name,
    SUM(OI.quantity * OI.unit_price) AS total_revenue
FROM Categories C
LEFT JOIN Products P ON C.category_id = P.category_id
LEFT JOIN Order_Items OI ON P.product_id = OI.product_id
GROUP BY C.category_id, C.name
ORDER BY total_revenue DESC;
