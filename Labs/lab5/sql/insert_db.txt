INSERT INTO countries (name, iso_code, currency, area_km2, official_language) VALUES
('USA', 'US', 'USD', 9833517.85, 'English'),
('Austria', 'AT', 'EUR', 83879.00, 'German'),
('China', 'CN', 'CNY', 9596961.00, 'Mandarin');


INSERT INTO tours (name, continent, duration_days, description, price, image_name, country_id)
VALUES
('Kolorado', 'Ameryka Północna', 7, 'jest wyżynno-górzystym stanem, którego średnia wysokość nad poziomem morza przekracza 2000 m. Najwyższy szczyt Kolorado, Mount Elbert, wznosi się na 4399 m n.p.m.', 19000.00, 'colorado.jpg', 1),

('Alaska', 'Ameryka Północna', 10, 'pasmo górskie w Ameryce Północnej w stanie Alaska. Jest to najwyższa część łańcucha Kordylierów z najwyższym szczytem kontynentu - Denali (McKinley) (6194 m n.p.m.).', 24000.00, 'alaska.jpg', 1),

('Everest', 'Azja', 7, 'najwyższy szczyt Ziemi (8848 m n.p.m., podaje się też wysokość 8844 lub 8850), ośmiotysięcznik położony w Himalajach Wysokich, na granicy Nepalu i Tybetu.', 22000.00, 'everest.jpg', 3),

('Alpy', 'Europa', 6, 'najwyższy łańcuch górski Europy, ciągnący się łukiem od wybrzeża Morza Śródziemnego w okolicy Savony po dolinę Dunaju w okolicach Wiednia.', 16000.00, 'alps.jpg', 2);
