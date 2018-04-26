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
 *   entity_type = "block_content",
 *   entity_bundle = "banner_block",
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

    $input = array_filter([
      'field_title' => $args['input']['title'],
      'field_summary' => key_exists('body', $args['input']) ? $args['input']['body'] : '',
    ]);

    $input['field_content_link'] = $args['input']['contentLink'];

    return $input;
  }

}
