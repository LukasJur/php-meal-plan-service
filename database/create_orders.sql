CREATE TYPE genderType AS ENUM ('male', 'female');
CREATE TYPE goalType AS ENUM ('lose', 'maintain', 'gain');

CREATE TABLE orders (
    order_id SERIAL,
    contacts VARCHAR(100),
	gender genderType,
    age SMALLINT,
    height SMALLINT,
	weight SMALLINT,
	act_lvl SMALLINT CHECK (act_lvl > 0 AND act_lvl < 4),
	goal goalType
);
