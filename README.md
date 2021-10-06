# Juego en PHP 🚀

EL siguiente repositorio explica de manera muy particular el como es el comportamiento de entre objetos dentro de la programacion orientado a objeto, dejando a un lado el paradigma de programacion estructurada.

En este use un directorio de carpetas que organizan de manera correacta cada una de las clases e interfaces usadas en el, ademas que hice uso del [composer.phar]('https://getcomposer.org/download/') para usar el autoload de todas las dependencias de la app.

📋

Esta app no es grafica solo es para entender de una manera muy detallada como se puede hacer programacion orientada objeto de una manera limpia usando patrones de diseño como factory y null object ademas del poco uso de condicionales If, basado en un principio tell don´t ask el cual argumenta que no se debe pedir informacion de los objetos sino que se deben decirles a los objecto que hacer mediante sus comportamientos o metodos.

## Historia de la app

Oracle un principe del reino de los pentabytes es retado a un duelo por su archienemigo Linux el cual es un señor oscuro poseedor de la espada de plata, en el duelo ambos titanes se enfrentan a una lucha a muerte por el reinado de los pentabytes, quien ganara

## Comandos para jugar

puedes crear los objetos que desees los cuales se pueden convertir en unidades de batalla y a los cuales les puede asignar diferentes tipos de armas desde [Basicbow], [BasicSword],[CrossBow], [FireBow] y ademas puede asignar diferentes tipos de armaduras o sin armaduras como [BronzeArmor], [CursedArmor], [SilverArmor] o sin armadura con [MissingArmor].

## Comandos para jugar 🔧
main.php podras escribir los comandos para entender como es el comportamiento

### Comando para crear la unidad
```
$nameObject = new Unit('nameObject', new armor\TypeWeapon);
```

### Comando para asignar una armadura a la unidad
```
$nameObject->setArmor(new new Armors\TypeArmor())
```

### Comando para atacar al oponente
```
$nameObject->attack($nameObject2);
```


# Gracias 