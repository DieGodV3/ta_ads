

<?php
class ConectarBaseDatos
{
    protected function conecta()
    {
        $host = 'localhost';
        $usuario = 'root';
        $contrasena = '12345678';
        $baseDatos = 'ejemplo';

        $conexion = new mysqli($host, $usuario, $contrasena, $baseDatos);
echo "sooo";
        if ($conexion->connect_error) {
            die('Error de conexión: ' . $conexion->connect_error);
        }

        return $conexion;
    }

    protected function desconecta($conexion)
    {
        $conexion->close();
    }
}
?>