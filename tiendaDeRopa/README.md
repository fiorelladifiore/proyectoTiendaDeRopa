# Proyecto Tienda De Ropa

Trabajo práctico especial de Web 2

Integrantes: Di Fiore Fiorella (fiorella2difiore@gmail.com), Iriart Manuel (iriartmanuel81@gmail.com).

Temática: Tienda de ropa.

Descripción de la temática: Página web de tienda de ropa que permite visualizar e interactuar con los productos de la misma.

La relación se encuentra en que una tienda tiene varias prendas de ropa y a esas prendas se le asigna la tienda indicada (FK).

Imagen DER:

![tienda_DER](https://github.com/fiorelladifiore/proyectoTiendaDeRopa/assets/166234882/dcec315e-769b-45e3-8d53-8cc23eb617d6)

Código SQL que genera la base de datos:
```
-- Table structure for table `ropa`
--

CREATE TABLE `ropa` (
  `id_ropa` int(11) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `talle` int(11) NOT NULL,
  `id_tienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tienda`
--

CREATE TABLE `tienda` (
  `id_tienda` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ropa`
--
ALTER TABLE `ropa`
  ADD PRIMARY KEY (`id_ropa`),
  ADD KEY `FK_ROPA_TIENDA` (`id_tienda`);

--
-- Indexes for table `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id_tienda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ropa`
--
ALTER TABLE `ropa`
  MODIFY `id_ropa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id_tienda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ropa`
--
ALTER TABLE `ropa`
  ADD CONSTRAINT `FK_ROPA_TIENDA` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id_tienda`);
```
