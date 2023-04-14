--
-- Extraindo dados da tabela `administrators`
--

INSERT INTO `administrators` (`id`, `name`, `login`, `password`, `email`, `description`, `status`, `create_date`) VALUES
(1, 'Equipe AnalisaItapê', 'admin', 'admin', 'equipeanalisaitape@gmail.com', 'Administrador da equipe interna AnalisaItapê', 1, '2022-01-01 00:00:01');

--
-- Extraindo dados da tabela `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `action`, `icon`) VALUES
(1, 'Dashboard', 'dashboard', 'fa fa-fw fa-dashboard'),
(2, 'Feedbacks', 'feedbacks', 'fa fa-fw fa-commenting'),
(3, 'Administradores', 'administradores', 'fa fa-fw fa-user'),
(4, 'Categorias', 'categorias', 'fa fa-fw fa-tag'),
(5, 'Parceiros', 'parceiros', 'fa fa-fw fa-users'),
(6, 'Artigos', 'artigos', 'fa fa-fw fa-file-text');


--
-- Extraindo dados da tabela `administrators_permissions`
--

INSERT INTO `administrators_permissions` (`administrator_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6);

