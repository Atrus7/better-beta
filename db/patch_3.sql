ALTER TABLE timestamp CHANGE id id int(11), DROP PRIMARY KEY, ADD PRIMARY KEY(rel_time);
