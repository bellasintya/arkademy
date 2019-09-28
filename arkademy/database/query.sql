SELECT name.name as name, work.name as work, salary.salary as salary 
FROM name JOIN work ON (name.id_work = work.id) 
JOIN salary ON (name.id_salary = salary.id);