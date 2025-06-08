CREATE DATABASE FincaSalamanca
GO
USE FincaSalamanca
GO

CREATE TABLE Empleados (
    IdEmpleado INT PRIMARY KEY IDENTITY(1,1),
    Nombre NVARCHAR(100),
    Puesto NVARCHAR(50),
    FechaIngreso DATE
);

CREATE TABLE Cultivos (
    IdCultivo INT PRIMARY KEY IDENTITY(1,1),
    Tipo NVARCHAR(50),
    FechaSiembra DATE,
    FechaCosecha DATE,
    Estado NVARCHAR(50)
);

CREATE TABLE Productos (
    IdProducto INT PRIMARY KEY IDENTITY(1,1),
    Nombre NVARCHAR(100),
    Categoria NVARCHAR(50),
    Precio DECIMAL(10,2),
    Stock INT
);



