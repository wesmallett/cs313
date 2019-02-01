-- CREATE DATABASE application_tracker;

CREATE TABLE IF NOT EXISTS Company(
	id SERIAL PRIMARY KEY,
	companyName VARCHAR(255) NOT NULL,
	streedAddress VARCHAR(255),
	city VARCHAR(255),
	state VARCHAR(255),
	zipcode VARCHAR(255),
	companyWebsite VARCHAR(255),
	notes VARCHAR(255),
	pointOfContact VARCHAR(255),
	phoneNumber VARCHAR(255),
	email VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS Application_Status(
	id SERIAL PRIMARY KEY,
	status VARCHAR(255) NOT NULL
);

INSERT INTO Application_Status(status) VALUES
	('Submitted'),
	('Screening'),
	('Interviewing'),
	('Offer Extended'),
	('Rejected'),
	('Offer Accepted'),
	('Offer Not Accepted');

CREATE TABLE IF NOT EXISTS Contact_Method(
	id SERIAL PRIMARY KEY,
	method VARCHAR(255) NOT NULL,
);

INSERT INTO Contact_Method(method)
	VALUES
		('Phone'),
		('Email'),
		('In-Person'),
		('Mail');

CREATE TABLE IF NOT EXISTS Contact_History(
	id SERIAL PRIMARY KEY,
	applicationSubmissionId INT,
	contactDate DATE NOT NULL,
	contactMethodId INT NOT NULL,
	notes VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS Application_Submissions(
	id SERIAL PRIMARY KEY,
	companyId INT NOT NULL,
	jobTitle VARCHAR(255) NOT NULL,
	salaryRequested INT,
	submissionDate DATE,
	lastContactId INT,
	resumeSubmission BYTEA,
	coverLetterSubmission BYTEA,
	notes VARCHAR(255),
	linkToJobPosting VARCHAR(255),
	applicationStatusId INT NOT NULL,
	FOREIGN KEY (companyId) REFERENCES Company (id),
	FOREIGN KEY (lastContactId) REFERENCES Contact_History (id),
	FOREIGN KEY (applicationStatusId) REFERENCES Application_Status (id)
);

ALTER TABLE Contact_History
ADD FOREIGN KEY (applicationSubmissionId) REFERENCES Application_Submissions (id);
