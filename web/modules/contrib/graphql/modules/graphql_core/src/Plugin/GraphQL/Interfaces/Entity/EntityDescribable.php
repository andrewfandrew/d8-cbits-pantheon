<?php

namespace Drupal\graphql_core\Plugin\GraphQL\Interfaces\Entity;

use Drupal\graphql\Plugin\GraphQL\Interfaces\InterfacePluginBase;

/**
 * @GraphQLInterface(
 *   id = "entity_describable",
 *   name = "EntityDescribable",
 *   interfaces = {"Entity"},
 *   description = @Translation("Common interface for entities that are describable.")
 * )
 */
class EntityDescribable extends InterfacePluginBase {

}
