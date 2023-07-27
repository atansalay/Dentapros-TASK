SELECT 
    u_list.id AS urun_id,
    k_list.grup_adi,
    u_list.urun_adi,
    u_list.urun_birimi AS birimi,
    COALESCE(giren_stok - cikan_stok, 0) AS guncel_stok
FROM 
    u_list
LEFT JOIN 
    k_list ON u_list.grup_id = k_list.id
LEFT JOIN 
    (SELECT 
        urun_id,
        SUM(giren_stok) AS giren_stok
    FROM 
        g_list
    GROUP BY 
        urun_id) AS giren ON u_list.id = giren.urun_id
LEFT JOIN 
    (SELECT 
        urun_id,
        SUM(cikan_stok) AS cikan_stok
    FROM 
        c_list
    GROUP BY 
        urun_id) AS cikan ON u_list.id = cikan.urun_id;


