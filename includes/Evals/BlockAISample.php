<?php

namespace MediaWiki\Extension\BlockAISample\Evals;

use MediaWiki\Extension\BlockAI\Evals\IEval;
use MediaWiki\Request\WebRequest;
use MediaWiki\Title\Title;
use MediaWiki\User\User;

/**
 * Custom sample request evaluation rule
 */
class BlockAISample implements IEval {

	public function __construct() {
	}

	public final function evaluate( WebRequest $request, Title $title, User $user ): bool {
		if ( $title->getNamespace() !== NS_MAIN ) {
			return false;
		}
		return true;
	}

	public final function name() : string {
		return self::class;
	}

	public final function description() : string {
		return 'Blocks all non-main namespace spaces';
	}

	public final function weight() : float {
		return 1;
	}
}
