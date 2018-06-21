<?php
/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 *
 * @package    rtMedia
 */

/**
 * Description of RTMediaCommentModel
 *
 * @author Udit Desai <udit.desai@rtcamp.com>
 */
class RTMediaCommentModel {

	/**
	 * Constructor
	 *
	 * @access public
	 */
	public function __construct() {
		// initialization.
	}

	/**
	 * Insert attr
	 *
	 * @access public
	 *
	 * @param  array $attr attributes.
	 */
	public function insert( $attr ) {

		return wp_insert_comment( $attr );
	}

	/**
	 * Update comment.
	 *
	 * @access public
	 *
	 * @param  array $attr attributes.
	 */
	public function update( $attr ) {

		return wp_update_comment( $attr, ARRAY_A );
	}

	/**
	 * Get comments.
	 *
	 * @access public
	 *
	 * @param  string $where where clause.
	 */
	public function get( $where ) {

		return get_comments( $where );
	}

	/**
	 * Get comments by id.
	 *
	 * @access public
	 *
	 * @param  int $id id.
	 */
	public function get_by_id( $id ) {

		return get_comment( $id );
	}

	/**
	 * Delete comments by id.
	 *
	 * @access public
	 *
	 * @param  int $id id.
	 */
	public function delete( $id ) {

		return wp_delete_comment( $id, true );
	}
}
