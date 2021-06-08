INSERT INTO 'wynik'('id', 'bmi_id', 'data_pomiaru', 'wynik') VALUES (NULL, '1', '2020-05-20', '15');
SELECT id, informacja, wart_min FROM bmi
SELECT wynik.wynik, bmi.informacja FROM wynik INNER JOIN bmi ON wynik.bmi_id=bmi.id
SELECT wart_min, wart_max FROM bmi WHERE informacja="niedowaga"
