
<h2 class="mb-4">Create Department</h2>

<div class="card dashboard-card">

    <div class="card-body">

        <form
            method="POST"
            action="/departments/store"
        >

            <div class="row">

                <div class="col-12 mb-3">

                    <label class="form-label">
                        Department Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Enter department name"
                        value="<?= htmlspecialchars((string) old('name')) ?>"
                        required
                    >

                </div>

                <div class="col-md-6 mb-4">

                    <label class="form-label">
                        Status
                    </label>

                    <select
                        name="status"
                        class="form-select"
                    >

                        <option
                            value="1"
                            <?= old('status', 1) == 1 ? 'selected' : '' ?>
                        >
                            Active
                        </option>

                        <option
                            value="0"
                            <?= old('status', 1) == 0 ? 'selected' : '' ?>
                        >
                            Inactive
                        </option>

                    </select>

                </div>

            </div>

            <div class="d-flex gap-2">

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Save Department
                </button>

                <a
                    href="/departments"
                    class="btn btn-outline-secondary"
                >
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>