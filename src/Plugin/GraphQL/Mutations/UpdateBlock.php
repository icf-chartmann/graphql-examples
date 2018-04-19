<?php

namespace Drupal\graphql_examples\Plugin\GraphQL\Mutations;

use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\UpdateEntityBase;
use GraphQL\Type\Definition\ResolveInfo;
use Drupal\graphql\GraphQL\Execution\ResolveContext;

/**
 * Simple mutation for updating an existing article node.
 *
 * @GraphQLMutation(
 *   id = "update_block",
 *   entity_type = "node",
 *   entity_bundle = "block",
 *   secure = true,
 *   name = "updateBlock",
 *   type = "EntityCrudOutput!",
 *   arguments = {
 *     "id" = "String",
 *     "input" = "BlockInput"
 *   }
 * )
 */
class UpdateBlock extends UpdateEntityBase {

  /**
   * {@inheritdoc}
   */
  protected function extractEntityInput($value, array $args, ResolveContext $context, ResolveInfo $info) {
    return array_filter([
      'title' => $args['input']['title'],
      'body' => key_exists('body', $args['input']) ? $args['input']['body'] : '',
    ]);
  }

}
